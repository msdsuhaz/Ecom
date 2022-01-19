<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\Product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
      public function index(){
          $catagoryes=Catagory::where('publication_status', 1)->get();
          $nwproducts=Product::where('publication_status',1)
                               ->orderBy('id','DESC')
                               ->take(4)
                               ->get();

          return view('front-end.home.home',[

              'catagoryes'=>$catagoryes,
              'nwproducts'=>$nwproducts

          ]);
      }

      public function catagoyProduct(){
          $catagoryes=Catagory::where('publication_status', 1)->get();
          return view('front-end.catagory.catagoryproduct',[
              'catagoryes'=>$catagoryes,
          ]);
      }

      public function blog(){
          return view('front-end.blog.blog');
      }

      public function rag(){

        return view('front-end.login.rag');

      }

}
