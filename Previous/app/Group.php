<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;
    protected $casts = ['tmp' => 'boolean'];

    public function members() {
        return $this->hasMany('App\Member');
    }

    public function transactions() {
        return $this->hasMany('App\Transaction');
    }


    public function scopeTemp($query) {
        return $query->where('tmp', true);
    }
}
