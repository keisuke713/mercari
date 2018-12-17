<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $guarded = ['id'];

    public static $rules = array(
        'name' => 'required',
        'body' => 'required',
        'category' => 'required',
        'price' => 'required',

    );

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
