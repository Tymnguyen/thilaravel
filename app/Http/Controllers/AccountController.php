<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller{

    public function login()
    {
        return view('account/login');
    }
    public function welcome(Request $request)
    {
        if($request ->session()->has('username')){
            $data = [
                'username' => $request->session()->get('username')
            ];
        }
        return view('account/welcome')->with($data);
    }public function processLogin(Request $request)
    {
        $username = $request ->input('username');
        $password = $request ->input('password');
        if ($username == 'acc1' && $password == '123'){
            //khai bao session username
            $request ->session()->put('username',$username);
            return redirect('/account/welcome');
        }else{
            $data =[
                'msg' =>'Invalid'
            ];
            return view('account/login')->with($data);
        }
    }
    public function logout(Request $request)
    {
        //huy session
        $request->session()->forget('username');
        return redirect('/account/login');
    }
    
}


?>