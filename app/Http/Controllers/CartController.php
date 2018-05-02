<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
   public function addToCart(Request $request){
       $product=Product::find($request->product_id);
       Cart::add([
           'id'=>$request->product_id,
           'name'=>$product->product_name,
           'price'=>$product->product_price,
           'qty'=>$request->qty,
           'options' =>[
               'image'=>$product->product_image
       ]
       ]);
       return redirect('/show-cart');
   }
   public function showCart(){
       $cartProducts=Cart::content();
       return view('front.cart.show-cart',['cartProducts'=>$cartProducts]);
   }
   public function updateCart(Request $request){
       Cart::update($request->rowId,$request->qty);
       return redirect('/show-cart')->with('message','Cart Quantity Update Successfully');

   }
   public function deleteCart($id){
       Cart::remove($id);
       return redirect('/show-cart')->with('message','Cart Info Delete Successfully');

   }
   public function directAddToCart($id){
       $product=Product::find($id);
       Cart::add([
           'id'=>$id,
           'name'=>$product->product_name,
           'price'=>$product->product_price,
           'qty'=>1,
           'options' =>[
               'image'=>$product->product_image
           ]
       ]);
       return redirect('/show-cart');
   }
}
