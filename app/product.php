<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        'category' => 'required',
        'price' => 'required',

    );
}
