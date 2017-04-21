<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'family', 'email', 'mobile', 'student_number', 'university', 'grade'];
    protected $casts = ['tmp' => 'boolean'];

    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function discount() {
        return $this->hasOne('App\Discount');
    }


    public function scopeFinal($query) {
        return $query->where('tmp', false);
    }

    public function getPriceAttribute() {
//        dd($this->discount);
        $price = $this->discount == null ? config('price.price') : (100 - $this->discount->percent) * config('price.price') / 100;
        return max(0, $price);
    }
}