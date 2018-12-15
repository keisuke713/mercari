<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Product;

class MercariController extends Controller
{
    public function add(Request $request)
    {
        $posts = Product::orderBy('id', 'DESC')->take(3)->get();
        return view('admin.mercari.top', ['posts' => $posts]);
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

    public function sell()
    {
        return view('admin.mercari.sell');
    }

    public function create(Request $request)
    {
        $this->validate($request, Product::$rules);

        $product = new Product;
        $form = $request->all();
        $product->user_id = Auth::user()->id;


        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $product->image_path = basename($path);
        } else {
            $product->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $product->fill($form);
        $product->save();

        return redirect('admin/mercari/top');

    }

    public function detail(Request $request)
    {
        $product = Product::find($request->id);

        return view('admin.mercari.detail', ['product' => $product]);
    }

}
