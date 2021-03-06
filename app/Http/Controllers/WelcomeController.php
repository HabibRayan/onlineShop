<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $products=Product::where('publication_status',1)->orderBy('id','desc')->take(10)->get();
       return view('front.home.home-content',['products'=>$products]);
    }
    public function aboutUs(){
       return view('front.about.about-content');
    }
    public function contact(){
       return view('front.contact.contact-content');
    }
    public function faqs(){
       return view('front.faqs.faq-content');
    }
    public function category($id){


        $categoryProducts=Product::where('category_id',$id)
            ->where('publication_status',1)
            ->orderBy('id','desc')
            ->get();
       return view('front.category.category-content',[
           'categoryProducts'=>$categoryProducts,

       ]);
    }
    public function dining(){
       return view('front.household.dining-content');
    }
    public function productDetails($id){
       $product=Product::find($id);
       $relatedProducts=Product::where('category_id', $product->category_id)
           ->orderBy('id','desc')
           ->take(8)
           ->get();
        return view('front.product.product-details',[
            'product'=>$product,
            'relatedProducts'=>$relatedProducts
        ]);
    }
}
