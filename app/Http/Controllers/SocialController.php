<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class SocialController extends Controller
{
	public function redirect(){
		return Socialite::driver('facebook')->redirect();
	} 
	public function callback(){
		$user = Socialite::drive('facebook')->user();

		return ($user->getAvatar());
	}   
/*
	public function redirect(){
		return Socialite::driver('twitter')->redirect();
	} 
	public function callback(){
		$user = Socialite::drive('twitter')->user();

		return ($user->getAvatar());
	} 

	public function redirect(){
		return Socialite::driver('google')->redirect();
	} 
	public function callback(){
		$user = Socialite::drive('google')->user();

		return ($user->getAvatar());
	} */
}
