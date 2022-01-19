<?php

namespace App\Http\Controllers;

use App\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

       public function index(){
           return view('admin.brand.add-brand');
       }
       public function saveCatagorybrand(Request $request){
                  $this->validate( $request,[
                      'brand_name'=>'required|regex:/(^([a-zA-z]+)(\d+)?$)/u',
                      'brand_Description'=>'required',
                      'publication_status'=>'required'

                  ]);
                  $brand =new brand();
                  $brand->brand_name = $request->brand_name;
                  $brand->brand_Description = $request->brand_Description;
                  $brand->publication_status = $request->publication_status;
                  $brand->save();

                 return redirect('/brand/add')->with('message','save brand sucessfuly');
       }
}
