<?php

namespace App\Http\Controllers;

use App\brand;
use App\Catagory;
use App\Product;
use Image;
use Illuminate\Http\Request;
use DB;


class ProductController extends Controller
{
    public function index(){
         $catagoyes= Catagory::where('publication_status',1)->get();
         $brandes= brand::where('publication_status',1)->get();
         return view('admin.product.add-product',[
                'catagoryes' => $catagoyes,
                 'brandes'  => $brandes

             ]);
    }

    public function productValidation($request){
        $this->validate($request,[
            'catagory_id'=>'required',
            'brand_id'=>'required',
            'product_name'=>'required' ,
            'product_price'=>'required' ,
            'product_quantity'=>'required' ,
            'short_Description'=>'required' ,
            'long_Description'=>'required' ,
            'product_image'=>'required' ,
            'publication_status'=>'required'
        ]);
    }


    public function imageImput($request){
        $productImage=$request->file('product_image');
        $imageType = $productImage->getClientOriginalExtension();
        $imageName=$request->product_name.'.'.$imageType;
        $directory = 'product-image/';
        $imageUrl= $directory.$imageName;
        //$productImage->move($directory,$imageName);
        Image::make($productImage)->save($imageUrl);
        return $imageUrl;
    }

    public function saveProductinfo($request,$imageUrl){
        $product=new Product();
        $product->catagory_id = $request->catagory_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_Description = $request->short_Description;
        $product->long_Description = $request->long_Description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    public function saveProduct(Request $request){

        $this->productValidation($request);
        $imageUrl=$this->imageImput($request);
        $this->saveProductinfo($request,$imageUrl);
        return redirect('/product/add')->with('massage','product save suceesfully');
    }

    public function manageProduct(){

         $products=DB::table('products')
             ->join('catagories','products.catagory_id', '=','catagories.id')
             ->join('brands','products.brand_id', '=','brands.id')
             ->select('products.*','catagories.catagory_name','brands.brand_name')
             ->get();


        return view('admin.product.manage',['products'=>$products]);
    }
}
