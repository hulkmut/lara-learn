<?php  namespace App\Http\Controllers;

class MyController extends Controller
{
	public function index($name='guest')
	{
		return view ('hi' , ['name' => $name]);
	}
}