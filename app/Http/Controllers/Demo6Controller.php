<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mobile;

class Demo6Controller extends Controller{

    public function index()
    {
        $data =[
            'mobiles' => Mobile::get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index2()
    {
        $data =[
            'mobiles' => Mobile::where('status',true)->get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index3()
    {
        $data =[
            'mobiles' => Mobile::where('price','>=',5)->get()
        ];
        return view('demo6/index')->with($data);
    }
    //sử dụng điều kiện và
    public function index4()
    {
        $data =[
            'mobiles' => Mobile::where('price','>=',5)->where('price','<=',10)->where('status',true)->get()
        ];
        return view('demo6/index')->with($data);
    }
    //sư dụng dk or
    public function index5()
    {
        $data =[
            'mobiles' => Mobile::where('price',4.5)->orwhere('price',6.6)->get()
        ];
        return view('demo6/index')->with($data);
    }
    //su dung tim kiem
    public function index6()
    {
        $data =[
            'mobiles' => Mobile::where('name','like','%top')->get()
        ];
        return view('demo6/index')->with($data);
    }
    //sap xep du lieu theo tang va giam
    public function index7()
    {
        $data =[
            'mobiles' => Mobile::orderBy('price','ASC')->get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index8()
    {
        $data =[
            'mobiles' => Mobile::orderBy('price','DESC')->get()
        ];
        return view('demo6/index')->with($data);
    }
    //sap xep ket hop voi dk
    public function index9()
    {
        $data =[
            'mobiles' => Mobile::orderBy('price','ASC')->where('status',true)->get()
        ];
        return view('demo6/index')->with($data);
    }
    // 2 dong dau tien
    public function index10()
    {
        $data =[
            'mobiles' => Mobile::take(2)->get()
        ];
        return view('demo6/index')->with($data);
    }
    // lay qua 2 dong
    public function index11()
    {
        $data =[
            'mobiles' => Mobile::skip(1)->take(2)->get()
        ];
        return view('demo6/index')->with($data);
    }
    // status=true, sap gia giam
    public function index12()//11
    {
        $data =[
            'mobiles' => Mobile::where('status',true)->orderBy('price','DESC')->take(3)->get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index13()//12
    {
        $data =[
            'mobile' => Mobile::find(2)
        ];
        return view('demo6/index2')->with($data);//lay ve 1 nen khong co get()
    }
    public function index14()//13
    {
        $data =[
            'mobile' => Mobile::firstWhere('name','like','%t%')
        ];
        return view('demo6/index2')->with($data);//lay ve mot nen khong co get()
    }
    public function index15()//14//tim theo nam
    {
        $data =[
            'mobiles' => Mobile::whereYear('created',2024)->get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index16()//15//tim theo nam/thang
    {
        $data =[
            'mobiles' => Mobile::whereYear('created',2024)->whereMonth('created',1)->get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index17()//16//tim nhung sp san xuat trong nam 2024
    {
        $data =[
            'mobiles' => Mobile::whereYear('created',2024)->whereMonth('created',1)->WhereDay('created',20)->get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index18()//17//tim theo ngay
    {
        $data =[
            'mobiles' => Mobile::whereDate('created','2023-10-16')->get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index19()//18//
    {
        $data =[
            'mobiles' => Mobile::whereDate('created','>=','2023-10-16')->WhereDate('created','<=','2024-01-16')->get()
        ];
        return view('demo6/index')->with($data);
    }
    public function index20(){
        $data=[
            'sum1' => Mobile::sum('quantity'),
            'sum2' =>Mobile::where('status',true)->sum('quantity'),
            'count1' => Mobile::count(),
            'count2' =>Mobile::where('status',true)->count(),
            'min' =>Mobile::min('price'),
            'max' =>Mobile::max('price'),
            'avg' =>Mobile::avg('price')
        ];
        return view ('demo6/index3')->with($data);
    }
    public function index21(){
        $mobile =[
            'name' => 'tulanh',
            'price' => 8.8,
            'quantity' => 11,
            'status' => true,
            'photo' =>'tym5.jpg',
            'created' =>'2024-01-22',
            'description' => 'Color violet'
        ];
        $id= Mobile::create($mobile);
        echo 'id: '.$id;
        return redirect('demo6/index');
    }
    public function index22(){//xoa du lieu 

        Mobile::where('id',6)->delete();

        return redirect('demo6/index');
    }
    public function index23(){//sua du lieu

        $data =[
            'name' =>'BBBBB',
            'price' => 9999,
            'created' =>'2023-11-11'
        ];
        Mobile::where('id',7)->update($data);
        return redirect('demo6/index');
    }
}


?>