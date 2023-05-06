<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ceklogin(){
        return view('login');
    }
    public function actionlogin(Request $request){
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        if(Auth::attempt($data)){
            $notification = array(
                'message' => 'Berhasil Login',
                'alert-type' => 'success'
            );
            return redirect('home')->with($notification);
        }
        else{
            redirect ('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }
}
