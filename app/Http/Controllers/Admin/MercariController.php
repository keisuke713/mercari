<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MercariController extends Controller
{
    public function add()
    {
        return view('admin.mercari.top');
    }
}
