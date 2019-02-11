<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Product;
use App\Store;

class ChargeController extends Controller
{
    public function charge(Product $product, Request $request)
    {
        try{
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => 1000,
                'currency' => 'jpy'
            ));

            $store = new Store;
            $store->product_id = $request->product;
            $store->save();

            return view('admin.mercari.sell');
        } catch (Exrption $ex) {
            return $ex->geMessage();
        }
    }
}
