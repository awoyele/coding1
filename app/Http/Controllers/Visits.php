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

class Visits extends Controller
{
    public function add_visit_patient(request $add_visit_details){
		
		
		$patient_id = $user_post->input('pid');
		$visit_date = $user_post->input('visit_date');
		$update_visit = DB::table('users')->where('id',$patient_id)->update(array(
                                 'visit_date'=>$visit_date,
		));
		if(!$update_visit){
			return redirect()->back()->with('alert', 'Please enter the details correctly!');
		}
	}
}
