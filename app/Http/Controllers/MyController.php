<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
	public function XinChao($name) {
		echo "hello " . $name;
	}

	public function getRequest(Request $req) {
		// echo $req->path();
		// echo $req->url();
		// echo $req->isMethod('post');
		echo $req->is('reuu');
	}

	public function postForm(Request $req) {
		// echo "hello : " . $req->name;
		return $req->input('email');
	}

	public function setCookie() {
		$response = new Response;
		$response->withCookie('khoahoc', 'Laravel', 0.2);
		echo "Da set cookie";
		return $response;
	}

	public function getCookie(Request $req) {
		return $req->cookie('khoahoc');
	}

	public function postFile(Request $req) {
		if ($req->hasFile('myFile')) {
			$file = $req->file('myFile');
			if ($file->getClientOriginalExtension('myFile') == 'png') {
				$file_name = $file->getClientOriginalName('myFile');
				echo $file->getClientMimeType('myFile');
				$file->move('img', $file_name);				
			}
			else {
				echo 'file ko dung dinh dang anh';
			}
			
		}
		else {
			echo "chua co file";
		}
	}

	public function getJson() {
		$arr = ['khoahoc' => 'laravel'];
		return response()->json($arr);
	}

	public function myView2() {
		return view('me/cong');
	}

	public function time($t) {
		return view('me.cong', ['time'=>$t]);
	}

}
