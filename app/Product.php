<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
       protected  $fillable=['catagory_id','brand_id','product_name','product_price','product_quantity','short_Description','long_Description','product_image','publication_status'];
}
