<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class MercariController extends Controller
{
    public function add()
    {
        return view('admin.mercari.top');
    }

    public function own(Request $request)
    {
        $user = Auth::user();
        return view('admin.mercari.mypage', ['user' => $user]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/mercari/top');

    }
}
