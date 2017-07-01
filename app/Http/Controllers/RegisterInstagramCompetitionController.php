<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterInstagramCompetitionController extends Controller
{
    public function register(Request $data) {
      $this->validate($data, [
				'name' => 'required|max:255',
				'email' => 'required|email|max:255|unique:instagram_users',
				'phone' => 'required|max:255',
				'line_id' => 'required|max:255',
				'instagram_username' => 'required|max:255',
				'from_instance' => 'required|max:255',
				'submitting_slot' => 'required',
			]);

	    $instagram = \App\InstagramUser::create([
	        'name' => $data['name'],
	        'email' => $data['email'],
	        'phone' => $data['phone'],
	        'line_id' => $data['line_id'],
	        'instagram_username' => $data['instagram_username'],
	        'from_instance' => $data['from_instance'],
	        'submitting_slot' => $data['submitting_slot'],
	    ]);
	    return View('bayar')->with('instagram', $instagram);
    }
}
