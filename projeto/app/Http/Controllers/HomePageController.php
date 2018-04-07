<?php namespace App\Http\Controllers;

class HomePageController extends Controller{
	public function exibeHome(){
        return view('HomePage');
    }
}