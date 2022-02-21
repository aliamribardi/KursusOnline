<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\detailCheckout;

class CartController extends Controller
{
    public function index()
    {
        $cartItem = \Cart::getContent();
        return view('frontend.cart')->with('kelases', $cartItem);
    }

    public function store() {
        $cartItem = \Cart::getContent();

        $checkout = new Checkout;
        $checkout['total'] = \Cart::getTotal();
        $checkout['user_id'] = auth()->user()->id;
        $checkout->save();

        foreach ($cartItem as $item) {
            $detailCheckout = new detailCheckout;
            $detailCheckout['name'] = $item->name;
            $detailCheckout['checkout_id'] = $checkout->id;
            $detailCheckout['kelas_id'] = $item->id;
            $detailCheckout['quantity'] = $item->quantity;
            $detailCheckout['harga'] = $item->price;
            $detailCheckout['status'] = $item->attributes->status;
            $detailCheckout['image'] = $item->attributes->image;
            $detailCheckout->save();
        }
        $cartItem = \Cart::clear();
        return redirect('/');
    }

    public function addToCart(Request $request) 
    {
        // dd($request->all());
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->harga,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
                'slug' => $request->slug,
                'status' => 'no',
            )
        ]);
        session()->flash('success', 'Kelas berhasil ditambah keCart !');

        return redirect()->back();

    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Kelas berhasil diUpdate !');

        return redirect()->route('cart.index');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.index');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        return redirect()->back()->with('success', 'All Item Cart Clear Successfully !');
    }

}
