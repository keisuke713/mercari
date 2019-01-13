<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function answer()
    {
        return $this->hasOne('App\Answer');
    }
}
