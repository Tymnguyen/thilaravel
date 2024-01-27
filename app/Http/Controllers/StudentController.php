<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use DateTime;
use Illuminate\Http\Request;

class StudentController extends Controller{

    public function index(){;
       $data =[
        'students' => Student::get()
       ];
        return view('student/index')->with($data);
    }
    public function details($id)
    {
        $data=[
            'student' => Student::find($id)
        ];
        return view('student/details')->with($data);
    }
    public function searchByKeyword(Request $request){
        $keyword = $request->get('keyword');
        $data=[
            'students' => Student::where('full_name','like','%'.$keyword.'%')->get(),
            'keyword' => $keyword
        ];
        return view('student/index')->with($data);
    }
    public function add(){
        return view('student/add');
    }
    public function save(Request $request)//quan trong bai thi
    {
        $student = $request->input();
        $student['dob'] = DateTime::createFromFormat('d/m/Y',$student['dob'])->format('Y-m-d');
        Student::create($student);
        return redirect('/student/index');
    }
    public function delete($id){//xoa du lieu 

        Student::where('id',$id)->delete();

        return redirect('student/index');
    }
    public function edit($id)
    {
        $data=[
            'student' => Student::find($id)
        ];
        return view('student/edit')->with($data);
    }
    public function update(Request $request)//quan trong bai thi
    {
        $student = $request->input();
        unset($student['_token']);
        $student['dob'] = DateTime::createFromFormat('d/m/Y',$student['dob'])->format('Y-m-d');
        Student::where('id',$student['id'])->update($student);
        return redirect('student/index');
    }
}

?>