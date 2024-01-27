<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Demo4Controller extends Controller{

    public function index()
    {
        return view('demo4/index');
    }
    public function index2($id)
    {
        echo $id;
        return view('demo4/index2');

    }
    public function index3($id,$username)
    {
        echo $id;
        echo'<br>';
        echo $username;
        return view('demo4/index3');

    }

    public function index4(Request $request)
    {
        if($request->has('id')){
            $id = $request->get('id');
            echo 'ID: '.$id;
        }
        if($request->has('username')){
            $username = $request->get('username');
            echo'<br><br>';
            echo 'USERNAME: '.$username;
        }
        return view('demo4/index4');
    }
}


?>