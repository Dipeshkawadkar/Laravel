<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class ContactController extends Controller
{
    //
        public function contact(Request $request){
    	$this->validate($request, [
    		'firstname'=>'required',
    		'lastname'=>'required',
    		'email'=>'required',
    		'phon'=>'required',
    		'phone'=>'required']);

    	
    	$candidates = new Candidate;
    	$candidates->firstname = $request->input('firstname');
    	$candidates->lastname = $request->input('lastname');
    	$candidates->email = $request->input('email');
    	$candidates->phon = $request->input('phon');
    	$candidates->phone = $request->input('phone');
    	$candidates->save();
    	return redirect('/contact')->with('response', 'Register Successfully');
     }
    // public function finalcontact1(){
    // 	return view("Contact.finalcontact");

    // }
}
