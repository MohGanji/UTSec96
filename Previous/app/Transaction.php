<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['id_get', 'group_id'];
    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function scopePaid($query) {
        return $query->where('status', 1);
    }
}
