<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    public function Register(Request $res)
    {
        // $res->validate([
        //     'name' => 'required|string|max:255',
        //     'surname' => 'required|string|max:255',
        //     'username' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'passwordOne' => 'required|numeric|min:8',
        //     'passwordTwo' => 'required|numeric|min:8',
        // ], [
        //     'name.required' => "กรุณาใส่ชื่อ",
        //     'surname.required' => "กรุณาใส่นามสกุล",
        //     'username.required' => "กรุณาใส่ชื่อผู้ใช้งาน",
        //     'email.required' => "กรุณาใส่อีเมล",
        //     'passwordOne' => "กรุณาใส่รหัสผ่าน",
        //     'passwordTwo' => "กรุณาใส่รหัสผ่านอีกครั้ง"
        // ]);



        // $user = new User;
        // $user->name = $res->name;
        // $user->surname = $res->surname;
        // $user->username = $res->username;
        // $user->email = $res->email;
        // $user->passwordOne = $res->passwordOne;
        // $user->passwordTwo = $res->passwordTwo;
        // $user->save();


        return back()->with('message', 'สมัครสมาชิกเรียบร้อย');



    }
}
