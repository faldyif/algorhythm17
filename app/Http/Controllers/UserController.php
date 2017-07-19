<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // TODO 9/7/2017 : Make User Controller when users have been signed in

	/*
	 * Only authenticated user can access this path
	*/
    public function __construct(){
    	$this->middleware('auth') ;
    	$this->cekLog() ;
    	echo "<script>console.log('".Auth::user()."')</script>" ;
    }

    public function cekLog(){
    	echo "<script>console.log('".Auth::user()."')</script>" ;
    }

	public function index(){
		$this->cekLog() ;
		return view('user.dashboard') ;
	}

	public function payment(){
		$this->cekLog() ;
		echo "<script>console.log('".Auth::user()."')</script>" ;
		return view('user.payment') ;
	}

	public function upload(){
		return view('user.upload') ;
	}

}
