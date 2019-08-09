<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Carbon\Carbon;
use Validator,Redirect,Response;
use App\Contact;
use Input;

class FormController extends Controller
{
    public function index()
    {
    	$data = Contact::get();
        return view('ajax-form', compact('data'));
    }       
 
    public function store(Request $request)
    {  
        request()->validate([
	        'name' => 'required',
	        'email' => 'required|email|unique:users',
	        'mobile_number' => 'required',

        ]);
         
        $data = $request->except(['_token']);
        $check = Contact::insert($data);
        $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
        if($check){ 
        	$arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
        }
        return Response()->json($arr);
       
    }

    public function imageUploadPost(Request $request)
    {
        if($request->hasFile('video')) 
        {
            $imageName = time().'.'.request()->video->getClientOriginalExtension();
            request()->video->move(public_path('img'), $imageName);
        }

        $data = Contact::create(['video' => $imageName,  'name' => 'hola nombre', 'email' => 'holaemail@corereo.com', 'mobile_number' => '9879879877']);

        return back()->with('success','You have successfully upload image.')->with('video',$imageName);;
    }



    public function destroy($id){
    	$user = Contact::where('id',$id)->delete();
    	//return $user;
        return Response::json($user);
    }
}
