<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consumirapi extends Controller
{
	public function index(Request $request)
	{
		
		
    return view('welcome');
	
	}
	
	public function recibir(Request $request)
    {
	
	$data = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");
	$products = json_decode($data, true);
 
	foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo '</pre>';
	}
	
	exit();
	return view('api');
	
	}
	
}
