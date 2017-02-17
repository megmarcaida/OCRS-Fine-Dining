<?php
namespace App\Http\Controllers;
use App\cltran_order;
class PrintController extends Controller
{


	public function printPreview() {
	$printPreview = cltran_order::orderBy('id','desc')->paginate(10);
	
	return view('printPreview',['printPreview' => $printPreview]);
	}
}