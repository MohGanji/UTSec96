<?php

namespace App\Http\Controllers;

use App\Discount;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Mail;
use App\Library\ReCaptcha;

class DiscountController extends Controller
{

    private function sendMail($discount) {
        Mail::send('emails.discount', ['dis' => $discount], function($message) use ($discount) {
            $message->from('info@utsec.ir', 'UTsec');
            $message->to($discount->email);
            $message->subject('UTsec - Discount Code');
        });
    }

    public function discount(Request $request) {
//        dd($request);


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
            'email' => 'required|email',
            'captcha'   => 'required',
        ]);

        $v->sometimes('email', 'edu', function($input) {
            return Discount::where('email', $input->email)->count() == 0;
        });

        if ($v->fails()) {
            return redirect()
                ->back()
                ->withErrors($v)
                ->withInput();
        }

        $email = $request->input('email');
        $discount = Discount::where('email', $email)->first();
        if($discount != null) {
            $this->sendMail($discount);
        } else {
            $discount = new Discount();

            do {
                $code = str_random(6);
            } while(Discount::where('code', $code)->count() != 0);
            $discount->code = $code;
            $discount->email = $email;


            if(preg_match("/^[^@]+@ut\.ac\.ir$/", $email))
                $discount->percent = config('price.discounts.ut', 65);
            else
                $discount->percent = config('price.discounts.uni', 55);

            $discount->save();
            $this->sendMail($discount);
        }

        return redirect()->back()->with('message', 'کد تخفیفت ارسال شد :)');
    }
}
