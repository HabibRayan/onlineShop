<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Image;
use DB;

class ProductController extends Controller
{
   public function addProduct(){
       $categories=Category::where('publication_status',1)->get();
       $brands=Brand::where('publication_status',1)->get();

       return view('admin.product.add-product',[
           'categories'=>$categories,
           'brands'=>$brands
       ]);
   }
   public function saveProductInfo(Request $request){

       $this->validate($request,[
           'product_name'=>'required',
           'product_code'=>'required',
           'product_price'=>'required',
           'product_quantity'=>'required',
           'short_description'=>'required',
           'long_description'=>'required',
           'product_image'=>'required'
       ]);

      $productImage=$request->file('product_image');
      $imageName=$productImage->getClientOriginalName();
      $directory='product-image/';
       $imgUrl=$directory.$imageName;

        Image::make($productImage)->resize(200,250)->save($imgUrl);
      $product = new Product();

      $product->category_id = $request->category_id;
      $product->brand_id = $request->brand_id;
      $product->product_name = $request->product_name;
      $product->product_code = $request->product_code;
      $product->product_price = $request->product_price;
      $product->product_quantity = $request->product_quantity;
      $product->short_description = $request->short_description;
      $product->long_description = $request->long_description;
      $product->product_image = $imgUrl;
       $product->publication_status = $request->publication_status;
       $product->save();
       return redirect('/add-product')->with('message','Product Info Save Successfully');



   }
   public function manageProductInfo(){
       $products=DB::table('products')

           ->join('categories','products.category_id','=','categories.id')
           ->join('brands','products.brand_id','=','brands.id')
           ->select('products.*','categories.category_name','brands.brand_name')
           ->get();


//       $products =Product::all();
       return view('admin.product.manage-product',['products'=>$products]);
   }
   public function viewProductInfo($id){
       $product=DB::table('products')

           ->join('categories','products.category_id','=','categories.id')
           ->join('brands','products.brand_id','=','brands.id')
           ->select('products.*','categories.category_name','brands.brand_name')
           ->where('products.id',$id)
           ->first();

       return view('admin.product.view-product',['product'=>$product]);

   }
   public function editProductInfo($id){
       $product=Product::find($id);
       $categories=Category::where('publication_status',1)->get();
       $brands=Brand::where('publication_status',1)->get();

       return view('admin.product.edit-product',[
           'product'=>$product,
           'categories'=>$categories,
           'brands'=>$brands
       ]);
   }
   public function updateProductInfo(Request $request){
       $product_image=$request->file('product_image');
       if($product_image){

           $productById=Product::find($request->product_id);

           unlink($productById->product_image);

           $productImage=$request->file('product_image');
           $imageName=$productImage->getClientOriginalName();
           $directory='product-image/';
           $imgUrl=$directory.$imageName;
           Image::make($productImage)->resize(200,250)->save($imgUrl);

           $productById->category_id = $request->category_id;
           $productById->brand_id = $request->brand_id;
           $productById->product_name = $request->product_name;
           $productById->product_code = $request->product_code;
           $productById->product_price = $request->product_price;
           $productById->product_quantity = $request->product_quantity;
           $productById->short_description = $request->short_description;
           $productById->long_description = $request->long_description;
           $productById->product_image = $imgUrl;
           $productById->publication_status = $request->publication_status;
           $productById->save();
           return redirect('/manage-product')->with('message','Product Info Save Successfully');
       }else{
           $productById=Product::find($request->product_id);

           $productById->category_id = $request->category_id;
           $productById->brand_id = $request->brand_id;
           $productById->product_name = $request->product_name;
           $productById->product_code = $request->product_code;
           $productById->product_price = $request->product_price;
           $productById->product_quantity = $request->product_quantity;
           $productById->short_description = $request->short_description;
           $productById->long_description = $request->long_description;
           $productById->publication_status = $request->publication_status;
           $productById->save();

           return redirect('/manage-product')->with('message','Product Info Save Successfully');

       }
   }
    public function unpublishedProductInfo($id){
        $productById=Product::find($id);
        $productById->publication_status = 0;
        $productById->save();

        return redirect('manage-product')->with('message','Product Info Update Successfully');

    }
    public function publishedProductInfo($id){
        $productById=Product::find($id);
        $productById->publication_status = 1;
        $productById->save();

        return redirect('manage-product')->with('message','Product Info Update Successfully');

    }
    public function deleteProductInfo($id){
        $productById=Product::find($id);
        unlink($productById->product_image);
        $productById->delete();

        return redirect('manage-product')->with('message','Product Info Delete Successfully');

    }


}
