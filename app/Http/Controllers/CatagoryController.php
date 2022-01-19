<?php

namespace App\Http\Controllers;

use App\Catagory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatagoryController extends Controller
{
    public function index(){
        return view('admin.catagroy.addcatagory');
    }

    public function saveCatagoryInfo(Request $request){

        $catagory= new Catagory();
        $catagory->catagory_name = $request->catagory_name;
        $catagory->Catagaory_Description = $request->Catagaory_Description;
        $catagory->publication_status = $request->publication_status;
        $catagory->save();

        return redirect('/catagory/add')->with('massage','catagory info save sucessfully');
    }


    public function manageCatagoryInfo(){
        $catagories = Catagory::all();
        return view('admin.catagroy.manage-catagory',['catagories'=>$catagories]);
    }


    public function UnpublishCatagoryInfo($id){
          $catagory= Catagory::find($id);
          $catagory->publication_status=0;
          $catagory->save();


          return redirect('/catagory/manage')->with('message','catagory info unpublish');

    }


    public function publishCatagory($id){
        $catagory=Catagory::find($id);
        $catagory->publication_status=1;
        $catagory->save();

        return redirect('/catagory/manage')->with('message','catagory info publish');
    }

    public function editCatagory($id){
        $catagory= Catagory::find($id);
        return view('admin.catagroy.editcatagory',['catagory'=>$catagory]);
    }

    public function updateCatagory(Request $request){
        $catagory= Catagory::find($request->catagory_id);

        $catagory->catagory_name = $request->catagory_name;
        $catagory->Catagaory_Description = $request->Catagaory_Description;
        $catagory->publication_status = $request->publication_status;
        $catagory->save();
        return redirect('/catagory/manage')->with('massage','catagory Update suceesfully');
    }

    public function deleatCatagory($id){
        $catagory= Catagory::find($id);
        $catagory->delete();
        return redirect('/catagory/manage')->with('massage','catagory delete suceesfully');
    }
}
