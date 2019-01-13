<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'body' => 'required',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function product()
    {
        return $this->belongsTo('App\Answer');
    }
}
