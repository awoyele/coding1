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
		
		$fullname = $user_post->input('fullname');
		$email = $user_post->input('email');
		$password = $user_post->input('password');
		$year = $user_post->input('year');
		$day = $user_post->input('day');
		if($day < 10) $day = '0'.$day;
		$month = $user_post->input('month');
		$birthday = '';
		$birthday .= $year.'-'.$month.'-'.$day;
		$start_date = $user_post->input('start_date_initial_contact');
		$dead_line_date = date('Y-m-d', strtotime($start_date. ' + 90 days'));
		$this->validate(request(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
		
		
		DB::insert('insert into users(id,name,email,password,birth_date,start_date,dead_line) values(?,?,?,?,?,?,?)',[null,$fullname,$email,$password,$birthday,$start_date,$dead_line_date]);
	}
}
