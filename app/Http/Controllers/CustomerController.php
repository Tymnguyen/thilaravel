<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Orders;
use DateTime;
use Illuminate\Http\Request;

class CustomerController extends Controller{

    public function index(){;
       $data =[
        'customers' => Customer::get()
       ];
        return view('customer/index')->with($data);
    }
    public function orders($id)
    {
        $data=[
            'orders' => Orders::where('customerid',$id)->orderBy('datecreation','DESC')->get(),
            'count' => Orders::where('customerid',$id)->count(),
            'customerid' => $id,
        ];
        return view('customer/orders')->with($data);
    }
    public function searchByKeyword(Request $request){
        $keyword = $request->get('keyword');
        $data=[
            'customers' => customer::where('name','like','%'.$keyword.'%')->get(),
            'keyword' => $keyword
        ];
        return view('customer/index')->with($data);
    }
    
    /*public function add(){
        $customer =[
            'name' => 'May',
            'address' => 'Address 5',
            'birthday' => '2024-08-12',
            'phone' => '0123456789'
        ];
        $id= Customer::create($customer);
        echo 'id: '.$id;
        return redirect('customer/index');
    }
    public function delete(){ 

        Customer::where('id',8)->delete();

        return redirect('customer/index');
    }
    public function edit(){

        $data =[
            'name' =>'Zata',
            'birthday' => '2001-11-11',
            'phone' =>'99999999'
        ];
        Customer::where('id',6)->update($data);
        return redirect('customer/index');
    }
    */
    public function add(){
        return view('customer/add');
    }
    public function save(Request $request)//quan trong bai thi
    {
        $customer = $request->input();
        $customer['birthday'] = DateTime::createFromFormat('d/m/Y',$customer['birthday'])->format('Y-m-d');
        Customer::create($customer);
        return redirect('/customer/index');
    }
    public function delete($id){//xoa du lieu 
        Orders::where('customerid',$id)->delete();
        Customer::where('id',$id)->delete();

        return redirect('customer/index');
    }
    public function edit($id)
    {
        $data=[
            'customer' => Customer::find($id)
        ];
        return view('customer/edit')->with($data);
    }
    public function update(Request $request)//quan trong bai thi
    {
        $customer = $request->input();
        unset($customer['_token']);
        $customer['birthday'] = DateTime::createFromFormat('d/m/Y',$customer['birthday'])->format('Y-m-d');
        Customer::where('id',$customer['id'])->update($customer);
        return redirect('customer/index');
    }
}


?>