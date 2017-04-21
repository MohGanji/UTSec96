<?php

namespace App\Console;

use App\Group;
use App\Member;
use App\Token;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();


        $schedule->call(function () {
            $date = new Carbon();
            $date->subMinutes(30);
//            $date->sub(new DateInterval('P7Y5M4DT4H3M2S'));
            $groups = Group::where('updated_at', '<', $date)->temp()->get();
            foreach($groups as $group) {
//                foreach($group->members as $member) {
//                    if($member->discount != null) {
//                        $discount = $member->discount;
//                        $discount->member_id = null;
//                        $discount->used = false;
//                        $discount->save();
//                    }
//                    $member->delete();
//                }
                $group->delete();
            }
        })->everyMinute();
    }
}
