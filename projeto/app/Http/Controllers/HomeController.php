<?php namespace App\Http\Controllers;

class HomeController extends Controller{
	public function exibeHome(){
        return view('home');
    }
}