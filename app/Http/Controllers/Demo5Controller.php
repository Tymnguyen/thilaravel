<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Demo5Controller extends Controller{

    public function index()
    {
        return view('demo5/index');
    }
    public function searchByKeyword(Request $request)
    {
        //return redirect('/demo4/index');
        $keyword = $request->get('keyword');
        $data =[
            'keyword' => $keyword
        ];
        return view('demo5/result1')->with($data);
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password= $request->input('password');
        $data =[
            'username' => $username,
            'password' => $password
        ];
        return view('demo5/result2')->with($data);
    }
    public function upload(Request $request){
        $fileName = $request->file('file')->getClientOriginalName();
        $size = $request->file('file')->getSize();
        $type = $request->file('file')->getClientOriginalExtension();
        $request->file->move(public_path('images'),$fileName);
        $data =[
            'fileName' =>$fileName,
            'size'=>$size,
            'type'=>$type
        ];
        return view('demo5/result3')->with($data);
    }
    public function uploads(Request $request){
        $files = $request->file('file');
        $fileInfos = [

        ];
        foreach($files as $file){
            $fileInfo = [
                'name' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'type' =>$file->getClientOriginalExtension()
            ];
            array_push($fileInfos ,$fileInfo);
            // upload file
            $file->move(public_path('images'),$file->getClientOriginalName());
        }
        $data = [
            'len' =>count($files),
            'fileInfos' =>$fileInfos
        ];
        return view('demo5/result4')->with($data);
    }
}


?>