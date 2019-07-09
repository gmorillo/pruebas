<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
 	public function index(Request $request)
    {
    	$name = $request->get('name');
    	$email = $request->get('email');
    	$bio = $request->get('bio');
        $users = User::orderBy('id', 'DESC')
        	->name($name)
        	->email($email)
        	->bio($bio)
        	->get();
        return view('search', compact('users'));
    }
}
