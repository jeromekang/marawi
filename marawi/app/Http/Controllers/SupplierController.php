<?php namespace App\Http\Controllers;

use DB;
use App\Http\Models\Supplier;

class SupplierController extends Controller {
	

	public function supplier()
	{
		$supplier = Supplier::all();
		return view('pages/supplier',['supplier' => $supplier]);

	}


}