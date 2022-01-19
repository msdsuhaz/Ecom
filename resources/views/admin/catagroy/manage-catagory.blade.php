@extends('layouts.app')
@section('content')

<div id="content" class="span10 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <table class="table table-bordered">

                            <tr class="bg-primary">
                                <th>SI No</th>
                                <th>Catagory Name</th>
                                <th>Catagory Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>

                            </tr>
                            @php($i=1)
                            @foreach($catagories as $catagory)
                            <tr >
                                <td>{{ $i++ }}</td>
                                <td>{{$catagory->catagory_name}}</td>
                                <td>{{$catagory->Catagaory_Description}}</td>
                                <td>{{$catagory->publication_status ==1 ? 'publish' : 'unpublish'}}</td>

                                <td>
                                   @if($catagory->publication_status ==1)
                                        <a href="{{route('unpublish-catagory',['id'=>$catagory->id])}}" class="btn btn-info btn-xs" >

                                        <span class="glyphicon glyphicon-arrow-up "></span>

                                    </a>
                                   @else
                                        <a href="{{route('published-catagory',['id'=>$catagory->id])}}" class="btn btn-info btn-xs" >

                                            <span class="glyphicon glyphicon-arrow-down "></span>

                                        </a>
                                    @endif
                                    <a href="{{route('edit-catagory',['id'=>$catagory->id])}}" class="btn btn-success btn-xs" >

                                        <span class="glyphicon glyphicon-edit "></span>

                                    </a>

                                    <a href="{{route('deleat-catagory',['id'=>$catagory->id])}}" class="btn btn-danger btn-xs" >

                                        <span class="glyphicon glyphicon-trash "></span>

                                    </a>

                                </td>


                            </tr>
                            @endforeach

                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection