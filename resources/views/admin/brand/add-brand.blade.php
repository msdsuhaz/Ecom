@extends('layouts.app')

@section('content')
    <div id="content" class="span10 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="text-center text-success">Add catagory Form</h4>
                        </div>

                        <div class="panel-body">
                            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                            {{ Form::open(['route'=>'new-brand','method'=>'POST','class'=>'from-horizontal']) }}
                            <div class="form-group">
                                <label class="control-label col-md-4">Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand_name" class="form-control"/>
                                    <span class="text-warning">{{$errors->has('brand_name')? $errors->first('brand_name'):' '}}</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Brand Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" name="brand_Description"></textarea>
                                    <span class="text-warning">{{$errors->has('brand_Description')? $errors->first('brand_Description'):' '}}</span>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4">Publication status</label>
                                <span class="text-warning">{{$errors->has('publication_status')? $errors->first('publication_status'):' '}}</span>
                                <div class="col-md-8">
                                    <label><input type="radio" checked name="publication_status" value="1"/>Publish</label>
                                    <label><input type="radio" name="publication_status" value="0"/>unPublish</label>
                                </div>

                            </div>

                            <div class="form-group">

                                <div class="col-md-8 col-lg-offset-4">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand Info" />
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