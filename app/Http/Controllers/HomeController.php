<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index()
    {
        $data=[
            'id' => 123,
            'username'=>'acc1'
        ];
        return view('home/index')->with($data);
    }
    
}


?>