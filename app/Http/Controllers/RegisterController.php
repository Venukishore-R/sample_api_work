<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
	function store(Request $request)
	{
		$request->validate([
			'name'=>'required',
			'email'=>'required',
			'password'=>'required',
		]);

		$register = Register::create($request->all());
		return [
			'status'=>1,
			'data'=>$register
		];	
	}  

	  
    public function index()
    {
        $register = Register::latest()->paginate(15);
        return [
            "status" => 1,
            "data" => $register
        ];
    }

    public function show(Register $register)
    {
    	return [
    		'status'=>1,
    		'data'=>$register
    	];
    }

    public function destroy(Register $register)
    {
    	$register->delete();
    	return [
    		'msg'=>'deleted successfully',
    	];
    }

    public function update(Request $request,Register $register)
    {
    	$request->validate([
    		'name'=>'required',
    		'email'=>'required',
    		'password'=>'required',
    	]);

    	$register->update($request->all());
    	return [
    		'status'=>1,
    		'data'=>$register,
    		'msg'=>'updated successfully',
    	];
    }

    
}

