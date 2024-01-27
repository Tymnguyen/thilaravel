<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class Demo3Controller extends Controller{

    public function index()
    {
        return view('demo3/index');
    }
    
}


?>