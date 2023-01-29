<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUnitRequest;
use App\Models\Addunit;
use App\Models\Clases;
use App\Models\College;
use App\Models\Course;
use App\Models\Major;
use App\Models\Teacher;
use App\Models\Time;
use Illuminate\Http\Request;

class AddunitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Addunit::paginate(20);
        return view('dashboard/addUnit/index',compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'college' => 'required',
        ]);
        $college =  $request->college;

        if($college){
            $teachers  = Teacher::where('college_id','=',$college)->get();
            $courses = Course::where('college_id','=',$college)->get();
            $classes = Clases::where('college_id','=',$college)->get();
            $majors = Major::where('college_id','=',$college)->get();
            return view('dashboard/addUnit/create', compact('college','teachers','courses','classes','majors','college'));
        }else{
            redirect()->route('addUnit.index');
        }
    }

    public function selectCollege(){
        $colleges = College::all();
        return view('dashboard/addUnit/select-college', compact('colleges'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUnitRequest $request)
    {
        $day = $request->day;
        $time = $request->time;
        $class = $request->class;
        $day2 = $request->day2;
        $time2 = $request->time2;
        $class2 = $request->class2;
        $status = $request->status;
        if( isset($day)  && !isset($day2)){
            $createTime = Time::create([
               'weekDay' => $day,
                'time'   => $time,
                'class_id' => $class,
                'course_id' => $request->course,
                'status'  => '0'
            ]);

        }elseif( isset($day) && isset($day2) ){
            $createTime = Time::create([
                'weekDay' => $day,
                'time'   => $time,
                'class_id' => $class,
                'course_id' => $request->course,
                'status'  => '0'
            ]);
            $createTime2 = Time::create([
                'weekDay' => $day2,
                'time'   => $time2,
                'class_id' => $class2,
                'course_id' => $request->course,
                'status'  => $status
            ]);
        }else{
            session()->flash('create-unit-error','واحد افزوده نشد لطفا مجددا تلاش کنید');
            return redirect()->route('addUnit.index');
        }

        if(isset($createTime) &&  !isset($createTime2) ){
            $createUnit = Addunit::create([
                'college_id' => $request->college_id,
                'major_id' => $request->major,
                'teacher_id' => $request->teacher,
                'class1_id' => $class,
                'course_id' => $request->course,
                'time1_id'  => $createTime->id
            ]);
        }elseif(isset($createTime) && isset($createTime2)){
            $createUnit = Addunit::create([
                'college_id' => $request->college_id,
                'major_id' => $request->major,
                'teacher_id' => $request->teacher,
                'class1_id' => $class,
                'course_id' => $request->course,
                'time1_id'  => $createTime->id,
                'time2_id'  => $createTime2->id,
                'status'  => $status
            ]);
        }else{
            session()->flash('create-unit-error','واحد افزوده نشد لطفا مجددا تلاش کنید');
            return redirect()->route('addUnit.index');
        }

        if($createUnit){
            session()->flash('create-unit-success','واحد افزوده شد');
            return redirect()->route('addUnit.index');
        }else{
            session()->flash('create-unit-error','واحد افزوده نشد لطفا مجددا تلاش کنید');
            return redirect()->route('addUnit.index');
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
        $unit  = Addunit::findorfail($id)->first();

        if($unit->time1_id){
            $time1 = Time::where('id','=',$unit->time1_id)->first();
        }
        if($unit->time2_id){
            $time2 = Time::where('id','=',$unit->time2_id)->first();
        }
        $teachers  = Teacher::all();
        $courses = Course::where('college_id', '=' ,$unit->college_id)->get();
        $classes = Clases::all();
        $majors = Major::all();
        if(isset($time1) && isset($time2)){
            return view('dashboard/addUnit/edit',compact('unit','time1','time2','teachers','courses','classes','majors'));
        }elseif(isset($time1) && !isset($time2)){
            return view('dashboard/addUnit/edit',compact('unit','time1','teachers','courses','classes','majors'));
        }else{
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $unit = Addunit::where('id','=',$id)->first();
        $day = $request->day;
        $time = $request->time;
        $class = $request->class;
        $day2 = $request->day2;
        $time2 = $request->time2;
        $class2 = $request->class2;
        $status = $request->status;
        if(isset($day)  && !isset($day2)){
            $createTime = Time::where('id','=',$unit->time1_id)->update([
                'weekDay' => $day,
                'time'   => $time,
                'class_id' => $class,
                'course_id' => $request->course,
                'status'  => '0'
            ]);

        }elseif( isset($day) && isset($day2) ){
            $createTime = Time::where('id','=',$unit->time1_id)->update([
                'weekDay' => $day,
                'time'   => $time,
                'class_id' => $class,
                'course_id' => $request->course,
                'status'  => '0'
            ]);
            $createTime2 = Time::where('id','=',$unit->time2_id)->update([
                'weekDay' => $day2,
                'time'   => $time2,
                'class_id' => $class2,
                'course_id' => $request->course,
                'status'  => $status
            ]);
        }else{
            session()->flash('update-unit-error','ویرایش انجام نشد لطفا دوباره تلاش کنید');
            return redirect()->route('addUnit.index');
        }

        if(isset($createTime) &&  !isset($createTime2) ){
            $createUnit = $unit->update([
                'major_id' => $request->major,
                'teacher_id' => $request->teacher,
                'course_id' => $request->course,
                'time1_id'  => $createTime->id
            ]);
        }elseif(isset($createTime) && isset($createTime2)){
            $createUnit =$unit->update([
                'major_id' => $request->major,
                'teacher_id' => $request->teacher,
                'course_id' => $request->course,
                'status'  => $status
            ]);
        }else{
            session()->flash('update-unit-error','واحد ویرایش نشد لطفا مجددا تلاش کنید');
            return redirect()->route('addUnit.index');
        }

        if($createUnit){
            session()->flash('update-unit-success','ویرایش با موفقیت انجام شد');
            return redirect()->route('addUnit.index');
        }else{
            session()->flash('update-unit-error','واحد ویرایش نشد لطفا مجددا تلاش کنید');
            return redirect()->route('addUnit.index');
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
        $selectRecord = Addunit::findorfail($id);
        $selectTime1 = $selectRecord->time1_id ;
        $selectTime2 = $selectRecord->time2_id ;


        $deleteAddUnit = Addunit::findorfail($id)->delete();
        if($selectTime1){
            Time::findorfail($selectTime1)->delete();
        }
        if($selectTime2){
            Time::findorfail($selectTime2)->delete();
        }
        if($deleteAddUnit){
            session()->flash('delete-AddUnit-success','رکورد مورد نظر حذف شد');
            return back();
        }else{
            session()->flash('delete-AddUnit-error','مشکلی ر خ داد لطفا بعدا تلاش کنید');
            return back();
        }
    }
}
