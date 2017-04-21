<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Group;
use App\Member;
use App\Transaction;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Miladr\Jalali\jDate;
use Validator;
use Crypt;
use Mail;
use App\Library\ReCaptcha;

class MainController extends Controller
{

    protected $api = 'c39b2-72ff2-72ab2-3966e-2dd5658d33419c7ee29f5b1264ac';

    public function show(Request $request) {
        return view('index');
    }


    public function showRegister(Request $request) {
        if(Session::has('group_id'))
            return redirect()->to(route('payment'));


        if(Member::where('tmp', false)->count() >= env('MAX_TEAMS', 99)) {
            return redirect(route('home'))->withErrors('با این که دوست داشتیم ببینیمت ولی دیر اومدی و ظرفیت مسابقه تکمیله. ایشالا تو برنامه‌های بعد ببینیمت.');
        }
        return view('register');
    }

    public function register(Request $request) {


        $secret = '6LfIbBcTAAAAAKSuqUuIHJNCjDNV3PzfDhf5PT4E'; //config('nocaptcha.secretkey');

//        die($secret);
        $response = null;
        $reCaptcha = new ReCaptcha($secret);
        $response = $reCaptcha->verifyResponse(
            $request->ip(),
            $request->input("g-recaptcha-response", '')
        );

        $array = $request->except('captcha');

        if($response != null && $response->success) {
            $array['captcha'] = '1';
        }


        $v = Validator::make($array, [
            'group.name' => 'required|unique:groups,name,NULL,id,deleted_at,NULL',
            'members.0.name'     => 'required',
            'members.*.email'    => 'unique:members,email,NULL,id,tmp,false',
            'members.*.mobile'   => 'unique:members,mobile,NULL,id,tmp,false',
            'members.*.discount_code'    => 'sometimes|exists:discounts,code,member_id,NULL',
            'captcha'           => 'required',
            'rules'             => 'required',
        ], [
            'rules.required'    => 'پذیرفتن قوانین مسابقه برای شرکت در مسابقه الزامی است.',
        ]);

        $v->after(function($v) use($request) {
            $i = -1;
            foreach ($request->input('members') as $member) {
                $i++;
                $code = trim($member['discount_code']);
                if ($code == '')
                    continue;
                $discount = Discount::where('code', $code)
                    ->where('member_id', null)
                    ->where(function ($query) use ($member) {
                        $query->where('email', $member['email'])
                            ->orWhere('email', '')
                            ->orWhereNull('email');
                    })->count();

                if($discount == 0) {
                    $v->errors()->add("members.$i.discount_code", 'کد تخفیف معتبر نیست و یا قبلا استفاده شده است و یا مربوط به آدرس ایمیل شما نیست.');
                }
            }
        });

        if ($v->fails()) {
            return redirect()
                ->back()
                ->withErrors($v)
                ->withInput();
        }

        $group = new Group();
        $group->name = $request->input('group.name', '');
        $group->save();
        for($i = 0; $i < 3; ++$i) {
            $member = $request->input('members', [])[$i];

            if(trim($member['name']) == '')
                continue;

            $new_member = $group->members()->create($member);

            if(trim($member['discount_code']) != '') {
                $discount = Discount::where('code', $member['discount_code'])
                    ->where('member_id', null)
                    ->where(function ($query) use ($member) {
                        $query->where('email', $member['email'])
                            ->orWhere('email', '')
                            ->orWhereNull('email');
                    })->first();

                $new_member->save();

                $discount->used = true;
                $discount->member_id = $new_member->id;

                $discount->save();
            }
        }

        session(['group_id' => Crypt::encrypt($group->id)]);
        return redirect()->to(route('payment'));
    }


    protected function code($group) {
        $code = "EV01";
        $code .= '16';//jDate::forge($group->created_at)->format('%y');

        if(!$group->tmp && $group->transactions->count() > 0) {
            $transaction = $group->transactions()->paid()->first();
            if($transaction != null)
                $code .= sprintf("%03d", $transaction->id);
        }

        $code .= date('md'); //jDate::forge($group->created_at)->format("md");
//            $code .= '01';
//            $code .=
        return $code;
    }


    public function payment(Request $request) {
//        dd(session('group_id'));
        if($request->session()->has('group_id')) {
            $group_id = Crypt::decrypt(session('group_id'));
            $group = Group::find($group_id);
            if($group == null) {
                $request->session()->forget('group_id');
                return redirect()->to(route('register'));
            }
            $group->touch();

            $price = 0;
            foreach ($group->members as $member) {
                $price += $member->price;
            }


            $code = $this->code($group);

            return view('payment', compact('group', 'price', 'code'));
        } else
            return redirect()->to(route('home'));
    }




    protected function send($url,$api,$amount,$redirect){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&amount=$amount&redirect=$redirect");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }

    protected function get($url,$api,$trans_id,$id_get){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&id_get=$id_get&trans_id=$trans_id");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }

    public function pay(Request $request) {

        if(session('group_id') != null) {
            $group_id = Crypt::decrypt(session('group_id'));
            $group = Group::find($group_id);
            if($group == null)
                return redirect()->to(route('home'))->withErrors(['خطا!‌ لطفا مجددا عملیات ثبت‌نام را انجام دهید.']);
            $group->touch();


            $price = 0;
            foreach ($group->members as $member) {
                $price += $member->price;
            }

//            dd($price);

            $url = 'http://payline.ir/payment/gateway-send';
            $amount = $price * 10;
            $redirect = urlencode( route('confirm') );
            $result = $this->send($url,$this->api,$amount,$redirect);
//            dd($result);
            if($result > 0 && is_numeric($result)){

                $transaction = Transaction::firstOrNew(['id_get' => $result ]);
                $transaction->id_get = $result;
                $transaction->price = $amount;
                $transaction->group_id = $group->id;
                $transaction->save();

                $go = "http://payline.ir/payment/gateway-$result";

//                $transaction = new
                return redirect($go);
            }


            return redirect()->to(route('payment'))->withErrors(['خطا در اتصال به صفحه پرداخت.']);
        } else
            return redirect()->to(route('home'))->withErrors(['خطا!‌ لطفا مجددا عملیات ثبت‌نام را انجام دهید.']);
    }


    public function confirm(Request $request) {

        $url = 'http://payline.ir/payment/gateway-result-second';
        $trans_id = $request->input('trans_id');
        $id_get = $request->input('id_get');

        $transaction = Transaction::where('id_get', $id_get)->first();
//        $transaction->save();

        $result = $this->get($url,$this->api,$trans_id,$id_get);

        $transaction->status = $result;
        $transaction->trans_id = $trans_id;
        $transaction->save();



        switch($result){
            case '-1' :
            case '-2' :
            case '-3' :
                return redirect(route('payment'))->withErrors('خطا در عملیات پرداخت!');
                break;
            case '-4' :
                return redirect(route('payment'))->withErrors('چنین تراکنشی در سیستم وجود ندارد!');
                break;
            case '1' :
                $transaction->group->tmp = false;
                $transaction->group->save();

                foreach ($transaction->group->members as $member) {
                    $member->tmp = false;
                    $member->save();
                }

                $code = $this->code($transaction->group);
                Mail::send('emails.payment', ['transaction' => $transaction, 'code' => $code,], function($message) use ($transaction) {
                    $message->from('info@utsec.ir', 'UTsec');
                    $message->to($transaction->group->members->first()->email);
                    $message->subject('UTsec - Registration Info.');
                });

                return redirect(route('payment'));
                break;
        }
    }


    public function cancel(Request $request) {

        if(session('group_id') != null) {
            $group_id = Crypt::decrypt(session('group_id'));
            $group = Group::find($group_id);

            if($group->tmp == true)
                $group->delete();
        }

        $request->session()->forget('group_id');

        return redirect(route('home'));
    }

    public function logout(Request $request) {
        $request->session()->forget('group_id');

        return redirect(route('home'));
    }
}
