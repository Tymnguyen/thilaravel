<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use DateTime;
use Illuminate\Http\Request;

class OrdersController extends Controller{

    public function index(){;
       $data =[
        'orders' => Orders::get()
       ];
        return view('orders/index')->with($data);
    }
    public function update(Request $request)//quan trong bai thi
    {
        $orders = $request->input();
        unset($orders['_token']);
        $orders['datecreation'] = DateTime::createFromFormat('d/m/Y',$orders['datecreation'])->format('Y-m-d');
        Orders::where('id',$orders['id'])->update($orders);
        return redirect('customer/orders/'.$orders['customerid']);
    }
    public function edit($id)
    {
        $data=[
            'orders' => Orders::find($id)
        ];
        return view('orders/edit')->with($data);
    }
    public function addorders($customerid){
        return view('orders/addorders')->with(['customerid' => $customerid]);
    }
    public function save(Request $request)//quan trong bai thi
    {
        $orders = $request->input();
        $orders['name'] = "Order for Customer " . $orders['customerid'];
        $orders['datecreation'] = DateTime::createFromFormat('d/m/Y',$orders['datecreation'])->format('Y-m-d');
        Orders::create($orders);
        return redirect('customer/orders/'.$orders['customerid']);
    }
    public function searchByOrders(Request $request){
        $key = $request->get('key');
        $data=[
            'orders' => orders::where('payments','like','%'.$key.'%')
            ->orwhere('status',$key)
            ->orwhere('datecreation','like','%'.$key.'%')
            ->get(),
            'key' => $key
        ];
        return view('orders/index')->with($data);
    }
    public function delete($customerid,$id){//xoa du lieu 

        Orders::where('id',$id)->delete();

        return redirect('customer/orders/' . $customerid);
    }
}


?>