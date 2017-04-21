<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Member;
use App\Token;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Mail;
use App\Library\ReCaptcha;

class ClassController extends Controller
{

    public function show(Request $request, $token) {
        return view('form')->with('token', $token);
    }

    public function set(Request $request) {

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
            'email'     => 'required|email',
            'token'     => 'required',
            'class'     => 'in:1,2,3',
            'captcha'   => 'required',
        ]);

        if ($v->fails()) {
            return redirect()
                ->back()
                ->withErrors($v)
                ->withInput();
        }

        $token = Token::where('email', $request->input('email'))->where('token', $request->input('token'));
//        dd($token);
        if($token->count() > 0) {
            Member::where('email', $request->input('email'))->update(['class' => $request->input('class')]);
            $token->delete();
            return redirect()->to(route('home'))->with('message', 'کارگاه شما با موفقیت تعیین شد :)');
        } else {
            return redirect()->back()->withErrors('Token mismatch!')->withInput();
        }
    }
}
