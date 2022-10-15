<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCourseRequest;
use App\Models\College;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(10);
        return view('dashboard.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        $colleges  = College::all();
        return view('dashboard.course.create',compact('teachers','colleges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCourseRequest $request)
    {
        $course = Course::create([
           'name' => $request->name,
           'code' => $request->code,
            'teacher_id' => $request->teacher,
            'college_id' => $request->college
        ]);
        if($course){
            session()->flash('add-major-success','افزودن درس موفقیت امیز بود');
            return redirect()->route('course.index');
        }else{
            session()->flash('add-major-error','افزودن درس موفقیت امیز نبود');
            return redirect()->route('course.index');
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
        $course =  Course::whereid($id)->first();
        $colleges = College::all();
        $teachers =  Teacher::all();
        return view('dashboard.course.edit',compact('course','teachers','colleges'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCourseRequest $request, $id)
    {
         $course = Course::findorfail($id);
         $course->update([
            'name' => $request->name,
            'code' => $request->code,
             'college_id' => $request->college,
             'teacher_id' =>$request->teacher
         ]);
         if($course){
             session()->flash('update-course','ویرایش درس موفقیت امیز بود');
             return redirect()->route('course.index');
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
        $course = Course::findorfail($id);
        $course->delete();
        if($course){
            session()->flash('delete-major','حذف درس موفقیت امیز بود');
            return redirect()->route('course.index');
        }else{
            session()->flash('delete-major','حذف درس موفقیت امیز نبود');
            return redirect()->route('course.index');
        }
    }
}
