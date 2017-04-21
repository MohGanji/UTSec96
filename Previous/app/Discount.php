<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Discount extends Model
{
    protected $dates = ['created_at', 'updated_at', 'expiration_date'];

    public function scopeUsable($query) {
        return $query->where('expiration_date', '<', Carbon::now())->whereRaw('count > used');
    }

    public function member() {
        return $this->belongsTo('App\Member');
    }
}
