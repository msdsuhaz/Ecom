@extends('layouts.app')
@section('content')

    <div id="content" class="span10 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table table-bordered">

                                <tr class="bg-primary">
                                    <th>SI No</th>
                                    <th>Catagory Name</th>
                                    <th>Brand Name</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>short description</th>
                                    <th>long description</th>
                                    <th>Product Image</th>
                                    <th>publication status</th>
                                    <th>Action</th>


                                </tr>
                                @php($i=1)
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$product->catagory_name}}</td>
                                    <td>{{$product->brand_name}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->product_quantity}}</td>
                                    <td>{{$product->short_Description}}</td>
                                    <td>{{$product->long_Description}}</td>
                                    <td>
                                        <img src="{{asset($product->product_image)}}" alt="">
                                    </td>
                                    <td>{{$product->publication_status}}</td>

                                </tr>
                                @endforeach

                            </table>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection