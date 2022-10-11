<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers  = Teacher::paginate(10);
        return view('dashboard.teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.teacher.add-teacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddTeacherRequest $request)
    {
        $pass = md5($request->password);
        $user = User::create([
            'user_name' => $request->user_name,
            'password' => $pass,
            'role' => 'teacher'
        ]);

        $teacher = Teacher::create([
            'full_name' => $request->full_name,
            'code_meli' => $request->code_meli,
            'degree' => $request->degree,
            'college' => $request->college,
            'age' => $request->age,
            'user_id' => $user->id

        ]);

        if($teacher){
            session()->flash('add.student.success','استاد جدید با موفقیت اضافه شد');
            return redirect()->route('teacher.index');
        }else{
            session()->flash('add.teacher.error','مشکلی رخ داده لطفا دوباره تلاش کنید');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher =  Teacher::whereid($id)->first();
        return view('dashboard.teacher.edit-teacher',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, $id)
    {
         User::whereid($id)->update([
            'user_name' => $request->user_name
        ]);
        $teacher = Teacher::where('user_id',$id)->update([
            'full_name' => $request->full_name,
            'code_meli' => $request->code_meli,
            'degree' => $request->degree,
            'age' => $request->age,
        ]);
        if($teacher){
            session()->flash('update.teacher.success','ویرایش با موفقیت انجام شد');
            return redirect()->route('teacher.index');
        }else{
            session()->flash('update.teacher.error','مشکلی رخ داده لطفا دوباره تلاش کنید');
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
        $teacher = Teacher::whereid($id)->first();
        $user = User::whereid($teacher->id)->delete();
        $teacher->delete();
        session()->flash('delete.teacher.success',' این استاد حذف شد');
        return back();
    }
}
