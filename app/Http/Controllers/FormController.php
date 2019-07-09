<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Contact;

class FormController extends Controller
{
    public function index()
    {
    	$data = Contact::select('id', 'name','email', 'mobile_number')->get();
        return view('ajax-form', compact('data'));
    }       
 
    public function store(Request $request)
    {  
        request()->validate([
	        'name' => 'required',
	        'email' => 'required|email|unique:users',
	        'mobile_number' => 'required'
        ]);
         
        $data = $request->except(['_token']);
        $check = Contact::insert($data);
        $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
        if($check){ 
        	$arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
        }
        return Response()->json($arr);
       
    }

    public function destroy($id){
    	$user = Contact::where('id',$id)->delete();
    	//return $user;
        return Response::json($user);
    }
}
