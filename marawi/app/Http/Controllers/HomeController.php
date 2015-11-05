<?php namespace App\Http\Controllers;
use DB;
class HomeController extends Controller {
	
	/*
	|------------------------------------------------------
	| Home Controller
	|
	|
	|
	|
	*/

	public function index()
	{
		return view('welcome');
	}

	public function about()
	{
		return view('pages/about');
	}

	public function address()
	{
		return view('pages/address');
	}

	public function supplier()
	{

		$supplier = DB::table('supplier')->get();
		return view('pages/supplier',['supplier' => $supplier]);
	}


}