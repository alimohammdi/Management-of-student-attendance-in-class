<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students  = Student::paginate(10);
        return view('dashboard.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.student.add-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddStudentRequest $request)
    {
        $pass = md5($request->password);
        $user = User::create([
            'user_name' => $request->user_name,
            'password' => $pass,
            'role' => 'student'
        ]);

        $student = Student::create([
            'full_name' => $request->full_name,
            'stu_number' => $request->stu_number,
            'code_meli' => $request->code_meli,
            'major' => $request->major,
            'stu_year' => $request->stu_year,
            'age' => $request->age,
            'user_id' => $user->id

        ]);

        if($student){
            session()->flash('add.student.success','دانشجوی جدید با موفقیت اضافه شد');
            return redirect()->route('student.index');
        }else{
            session()->flash('add.student.error','مشکلی رخ داده لطفا دوباره تلاش کنید');
            return back();
        }

     }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $student =  Student::whereid($id)->first();
        return view('dashboard.student.edite-student',compact('student'));
    }


    public function update(UpdateStudentRequest $request, $id)
    {
        $user = User::whereid($id)->update([
            'user_name' => $request->user_name
        ]);
        $student = Student::where('user_id',$id)->update([
            'full_name' => $request->full_name,
            'stu_number' => $request->stu_number,
            'code_meli' => $request->code_meli,
            'major' => $request->major,
            'stu_year' => $request->stu_year,
            'age' => $request->age,
        ]);
        if($student){
            session()->flash('update.student.success','ویرایش با موفقیت انجام شد');
            return redirect()->route('student.index');
        }else{
            session()->flash('update.student.error','مشکلی رخ داده لطفا دوباره تلاش کنید');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::whereid($id)->first();
        $user = User::whereid($student->id)->delete();
        $student->delete();
        session()->flash('delete.student.success','دانشجو حدف شد');
        return back();

    }
}