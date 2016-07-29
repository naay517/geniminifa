<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Usera;
use App\Models\Perusahaan;

class HomeController extends Controller
{
    public function index()
	{
		$where = array('USER_ID' => '1');
		$usera = Usera::where($where)->get();
		$comp = Perusahaan::where($where)->get();
		// $users = (object) $usera;
		 // print_r($users);
		return view('index', ['users' => $usera, 'comps' => $comp]);
		// , ['groups' => $groups]);
	}
}
