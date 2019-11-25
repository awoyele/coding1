<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class Users extends Controller
{
    public function add_patient(request $user_post){
		
		echo $fullname = $user_post->input('fullname');
		echo $email = $user_post->input('email');
		echo $password = $user_post->input('password');
		echo $start_date = $user_post->input('start_date_initial_contact');
		$this->validate(request(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
		#DB::insert('insert into users(id,name,email,password,start_date) values(?,?,?,?,?)',[null,$fullname,$email,$password,$start_date]);
	}
}
