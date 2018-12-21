<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;
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

        return view('admin.mercari.mypage');
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
        $user = User::find($product->user_id);

        return view('admin.mercari.detail', ['product' => $product, 'user' => $user]);
    }

    public function edit(Request $request)
    {
        $product = Product::find($request->id);

        return view('admin.mercari.edit', ['product_form' => $product]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Product::$rules);

        $product = Product::find($request->id);
        $product_form = $request->all();
        $product->user_id = Auth::user()->id;

        unset($product_form['_token']);

        $product->fill($product_form)->save();
        $user = User::find($product->user_id);

        return view('admin.mercari.detail', ['product' => $product, 'user' => $user]);
    }

    public function delete(Request $request)
    {
        $product = Product::find($request->id);

        $product->delete();

        return redirect('admin/mercari/top');
    }

    public function index(Request $request)
    {
        $pro_name = $request->pro_name;
        $products = Product::where('name', $pro_name)->get();



        return view('admin.mercari.index', ['products' => $products, 'pro_name' => $pro_name ]);
    }

}
