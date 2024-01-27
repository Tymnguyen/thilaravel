<?Php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

Class DemoController extends Controller
{
    public function index(){
        echo 'Hello Word';
    }
    public function index2(){
        $data = [
            'id' =>123,
            'username' => 'acc1',
            'status' => true,
            'price' => 4.5,
            'quantity' => 20,
            
        ];
        return view('demo/index')->with($data);
    }
    public function index3(){
        $data=[
            'status' =>false,
            'score' => 5.6,
            'names' =>[
                'Name 1','Name 2','Name 3','Name 4'
            ],
            'photos' =>[
                'tym1.jpg','tym2.jpg','tym3.jpg','tym4.jpg'
            ]
        ];
        return view('demo/index2')->with($data);
    }
}


?>