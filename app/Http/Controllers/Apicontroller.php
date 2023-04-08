<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Apicontroller extends Controller
{
	function getdata()
	{
		return ["name"=>"Venukishore","email"=>"venuvk@gmail.com"];
	}
}
