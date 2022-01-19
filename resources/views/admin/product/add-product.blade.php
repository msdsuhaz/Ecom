@extends('layouts.app')

@section('content')
    <div id="content" class="span10 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="text-center text-success">Add product Form</h4>
                        </div>

                        <div class="panel-body">
                            <h3 class="text-center text-success">{{Session::get('massage')}}</h3>
                            {{ Form::open(['route'=>'new-product','method'=>'POST','class'=>'from-horizontal','enctype'=>'multipart/form-data']) }}
                            <div class="form-group">
                                <label class="control-label col-md-4">Catagory Name</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="catagory_id">
                                        <option>---select catagory name---</option>
                                        @foreach($catagoryes as $catagoy)
                                        <option value="{{$catagoy->id}}">{{$catagoy->catagory_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-warning">{{$errors->has('catagory_id')? $errors->first('catagory_id'):' '}}</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">brand Name</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="brand_id">
                                        <option>---select brand name---</option>
                                        @foreach($brandes as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-warning">{{$errors->has('brand_id')? $errors->first('brand_id'):' '}}</span>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4">product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_name" class="form-control"/>
                                    <span class="text-warning">{{$errors->has('product_name')? $errors->first('product_name'):' '}}</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">product price</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_price" class="form-control"/>
                                    <span class="text-warning">{{$errors->has('product_price')? $errors->first('product_price'):' '}}</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">product quantity</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_quantity" class="form-control"/>
                                    <span class="text-warning">{{$errors->has('product_quantity')? $errors->first('product_quantity'):' '}}</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">short Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" name="short_Description"></textarea>
                                    <span class="text-warning">{{$errors->has('short_Description')? $errors->first('short_Description'):' '}}</span>
                                </div>

                            </div>

                            <div class="form-group" >
                                <label class="control-label col-md-4">long Description</label>
                                <div  class="col-md-4" >
                                    <textarea class="form-control" id="editor" name="long_Description"></textarea>
                                    <span class="text-warning">{{$errors->has('long_Description')? $errors->first('long_Description'):' '}}</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="product_image" class="form-control" accept="image/*"/>
                                    <span class="text-warning">{{$errors->has('product_image')? $errors->first('product_image'):' '}}</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Publication status</label>

                                <div class="col-md-8">
                                    <label><input type="radio" checked name="publication_status" value="1"/> Publish</label>
                                    <label><input type="radio" name="publication_status" value="0"/> unPublish</label>
                                </div>
                                <span class="text-warning">{{$errors->has('publication_status')? $errors->first('publication_status'):' '}}</span>
                            </div>

                            <div class="form-group">

                                <div class="col-md-8 col-lg-offset-4">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Save product Info" />
                                </div>

                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection