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
                                                 <h3 class="text-center text-success">{{Session::get('massage')}}</h3>
                                                 <form action="{{ Route('newcatagory') }}" method="POST" class="form-horizontal">
                                                        {{csrf_field()}}
                                                         <div class="form-group">
                                                                <label class="control-label col-md-4">Catagaory Name</label>
                                                                <div class="col-md-8">
                                                                       <input type="text" name="catagory_name" class="form-control"/>
                                                                </div>

                                                         </div>
                                                        <div class="form-group">
                                                               <label class="control-label col-md-4">Catagaory Description</label>
                                                               <div class="col-md-8">
                                                                      <textarea class="form-control" name="Catagaory_Description"></textarea>
                                                               </div>

                                                        </div>

                                                        <div class="form-group">
                                                               <label class="control-label col-md-4">Publication status</label>
                                                               <div class="col-md-8">
                                                                      <label><input type="radio" checked name="publication_status" value="1"/>Publish</label>
                                                                      <label><input type="radio" name="publication_status" value="0"/>Unpublish</label>
                                                               </div>

                                                        </div>

                                                        <div class="form-group">

                                                               <div class="col-md-8 col-lg-offset-4">
                                                                      <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Catagory Info" />
                                                               </div>

                                                        </div>

                                                 </form>

                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>


@endsection
