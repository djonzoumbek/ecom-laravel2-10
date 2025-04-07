<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductManager extends Controller
{
    function index()
    {
        $products = Product::paginate(8);
        return view('pages.products', compact('products'));
    }

    function details($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('pages.details', compact('product'));
    }

    function addToCart($id)
    {
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $id;
        if ($cart->save()) {
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        return redirect()->back()->with('error', 'Something went wrong!');
    }

    function showCart()
    {
        $cartItems = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->select('cart.product_id', DB::raw('count(*) as quantity'), 'products.title', 'products.price', 'products.slug', 'products.image', 'products.description')
            ->where('cart.user_id', auth()->user()->id)->groupBy('cart.product_id', 'products.title', 'products.price', 'products.slug', 'products.image', 'products.description')
            ->paginate('5');
        return view('pages.cart', compact('cartItems'));
    }
}
