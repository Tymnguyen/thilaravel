<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class Demo2Controller extends Controller{

    public function index()
    {
        $product = new Product(1,'name 1','tym1.jpg',4.5,20);
        $data = [
            'product' => $product
        ];
        return view('demo2/index')->with($data);
    }
    public function index2(){
        $product = [
            new Product(1,'name 1','tym1.jpg',4.5,20),
            new Product(2,'name 2','tym2.jpg',6.5,12),
            new Product(3,'name 3','tym3.jpg',9.6,7)
        ];
        $data = [
            'products' =>$product
        ];
        return view('demo2/index2')->with($data);
    }

}


?>