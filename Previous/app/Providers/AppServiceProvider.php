<?php

namespace App\Providers;

use App\Group;
use App\Member;
use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('edu', function($attribute, $value, $parameters, $validator) {
            return $value != null && (
                preg_match("/^[^@]+@.+\.ac\.ir$/", $value)
                || preg_match("/^[^@]+@.+\.edu$/", $value)
            );
        });

        Member::deleting(function($member) {
            if($member->discount != null) {
                $discount = $member->discount;
                $discount->member_id = null;
                $discount->used = false;
                $discount->save();
            }
        });

        Group::deleting(function ($group) {
            foreach($group->members as $member) {
                $member->delete();
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
