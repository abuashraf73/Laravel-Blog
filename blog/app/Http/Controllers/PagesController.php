<?php 
namespace App\Http\Controllers;

class PagesController extends Controller{

		public function getIndex(){
			return view('Pages.welcome');

		}

		public function getAbout(){
				$a= 'Abu';
				$b= 'AShraf';
				$full = $a." ".$b;
				$mail = 'abuashraf501@gmail.com';
			return view('Pages.about')->with("fullname",$full)->with("email",$mail);
		}

		public function getContact(){
			return view('Pages.contact');

		}



}

 ?>
