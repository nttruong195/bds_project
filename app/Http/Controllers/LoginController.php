<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TaiKhoan;

class LoginController extends Controller
{
    //
	public function login(Request $request){
		$taikhoan = TaiKhoan::Where([
			['TenTaiKhoan', $request->input("TenTaiKhoan")],
			['MatKhau',  $request->input("MatKhau")],
			])->first();
		if($taikhoan == null){
			return 0;
		}else {
			return $taikhoan;
		}

	}
}
