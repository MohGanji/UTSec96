<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'MainController@show']);
//    Route::get('register', function(){
//        return redirect()->to(route('home'));
//    });

    Route::get('register', ['as' => 'register', 'uses' => 'MainController@showRegister']);
    Route::post('register', ['as' => 'doRegister', 'uses' => 'MainController@register']);
    Route::post('discount', ['as' => 'discount', 'uses' => 'DiscountController@discount']);
    Route::get('payment', ['as' => 'payment', 'uses' => 'MainController@payment']);
    Route::get('pay', ['as' => 'pay', 'uses' => 'MainController@pay']);
    Route::get('cancel', ['as' => 'cancel', 'uses' => 'MainController@cancel']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'MainController@logout']);
    Route::post('confirm', ['as' => 'confirm', 'uses' => 'MainController@confirm']);


    Route::get('class/set/{token}', ['as' => 'class.set.show', 'uses' => 'ClassController@show']);
    Route::post('setClass', ['as' => 'class.set.set', 'uses' => 'ClassController@set']);



    Route::get('email', function() {
        return redirect()->to(route('home'));
        $members = \App\Member::query()->final()->get();
//        $members = \App\Member::query()->where('email', 'a.abiri@ut.ac.ir')->get();
        $i = 0;
        foreach($members as $member) {
            if(!filter_var($member->email, FILTER_VALIDATE_EMAIL))
                continue;

            do {
                $code = bin2hex(random_bytes(16));
            } while(\App\Token::where('token', $code)->count() > 0);
            $token = new \App\Token();
            $token->token = $code;
            $token->email = $member->email;
            $token->save();
            Mail::queue('emails.info', compact('token', 'member'), function($message) use ($member) {
                $message->from('info@utsec.ir', 'UTsec');
                $message->to($member->email);
                $message->replyTo('info@utsec.ir', 'UTsec');
//                    $message->to('a.abiri@ut.ac.ir');
//                    $message->to('a.dadfarnia@ut.ac.ir');
//                    $message->to('ehsanhajyasini@gmail.com');
                $message->subject('UTsec - Important Notes');
            });

            echo "$i <br/>\n";
            $i++;
        }
    });


    Route::get('email2', function() {
        return redirect()->to(route('home'));
        $members = \App\Member::query()->final()->get();
//        $members = \App\Member::query()->where('email', 'a.abiri@ut.ac.ir')->get();
        $i = 0;
        foreach($members as $member) {
            if(!filter_var($member->email, FILTER_VALIDATE_EMAIL))
                continue;

            Mail::queue('emails.final', compact('member'), function($message) use ($member) {
                $message->from('info@utsec.ir', 'UTsec');
                $message->to($member->email);
                $message->replyTo('info@utsec.ir', 'UTsec');
//                    $message->to('a.abiri@ut.ac.ir');
//                    $message->to('a.dadfarnia@ut.ac.ir');
//                    $message->to('ehsanhajyasini@gmail.com');
                $message->subject('UTsec - Final Check');
            });

            echo "$i <br/>\n";
            $i++;
        }
    });


    Route::get('contest', function() {
        return redirect()->to('http://acm.ut.ac.ir/utsec/contest');
    });

    Route::get('contest-files', function() {
        return redirect()->to('http://acm.ut.ac.ir/utsec/Contest-Files');
    });


//    Route::get('test', function() {
//        return preg_match("/^[^@]+@[^\.]+\.ac\.ir$/", Request::input('q'))
//        || preg_match("/^[^@]+@[^\.]+\.edu$/", Request::input('q')) ? "ok" : "nokay";
//    });
});
