<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Addunit;
use App\Models\Clases;
use App\Models\Course;
use App\Models\Rollcall;
use App\Models\Selectunit;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isNull;

class RollcallController extends Controller
{
    public function weekDay(){

date_default_timezone_set("Asia/Tehran");
$MyDate = date("N",time());

switch ($MyDate){
    case 1 :
        return "دو شنبه";
        break;
    case 2 :
        return "سه شنبه";
        break;

    case 3 :
        return "چهار شنبه";
        break;

    case 4 :
        return "پنج شنبه";
        break;


    case 5 :
        return "جمعه";
        break;

    case 6 :
        return "شنبه";
        break;

    case 7 :
        return "یک شنبه";
        break;
}


    }

    public function index()
    {
        $weekDay = $this->weekDay();
        $date = verta()->formatWord('d F') . verta()->year;
        return view('dashboard.rollcall.base-form',compact('weekDay','date'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $classNumber = $request->class_number;
        $studentNumber = $request->stu_number;
        // select this class from database
        $thisClass = Clases::where('classNumber', $classNumber)->first();
        $classId = $thisClass->id;

        // select student
        $thisStudent = Student::where('stu_number',$studentNumber)->first();

        // select weekDay  (روز هفتگی)
        $weekDay = $this->weekDay();



        // find now time and date
        $currentTime = verta()->formatTime() ; // 00:00:00
        $currentHourTime = verta()->hour.':00:00';  // 00
        $currentDate = verta()->formatDate() ; // 1401-00-00



        $selectTime = Time::where('weekDay',$weekDay)->where('class_id',$classId)->where('time',$currentHourTime)->first();

        if( !empty($selectTime)){
            $unitTime1 = Addunit::where('time1_id',$selectTime->id)->where('course_id',$selectTime->course_id)->first();
            $unitTime2 = Addunit::where('time2_id',$selectTime->id)->where('course_id',$selectTime->course_id)->first();

            if(!empty($unitTime1) & empty($unitTime2)){
                $unitID = $unitTime1->id;
                $studentID = $thisStudent->id;

                $check_class = Selectunit::where('addunit_id',$unitID)->where('student_id',$studentID)->first();

                if(!empty($check_class)){
                    $search = Rollcall::where('student_id',$check_class->student_id)->where('addunit_id',$check_class->addunit_id)->where('date',$currentDate)->where('status','0')->first();
                   if( empty($search)){
                       $create = Rollcall::create([
                           'student_id'  => $check_class->student_id,
                           'addunit_id'     =>  $check_class->addunit_id,
                           'status'    =>    '0',
                           'rollcall'      => '1',
                           'date'       => $currentDate
                       ]);
                       if($create){
                           return ' حضور شما برای این کلاس ثبت شد ';
                       }else{
                           return 'واحد درسی مورد نظر برای شما ثبت نشده 4';
                       }
                   }else{
                       return 'حضور شما در این کلاس پیش تر ثبت شده است';
                   }
                }else{
                    return 'واحد درسی مورد نظر برای شما ثبت نشده 3';
                }

            }elseif(!empty($unitTime2) & empty($unitTime1)){

            }else{
                return 'در این زمان درسی برای این کلاس تعریف نشده2 ';
            }
        }else{
           return 'در این زمان درسی برای این کلاس تعریف نشده1 ';
        }

    }

    public function show($id)
    {
        $students = Selectunit::where('addunit_id',$id)->get();
        $date = Rollcall::select('date')->distinct()->get();
        $rollcall = Rollcall::where('addunit_id',$id)->get();
        return view('dashboard.rollcall.teacher.rollcall-list',compact('students','rollcall','date'));

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


    public function selectCourse(){
        $teacher_id = auth()->id();
        $user = User::where('id',$teacher_id)->first();
        if($user){
            if($user->role === 'teacher'){
                $teacher = Teacher::where('user_id',$user->id)->first();
                $courses =  Addunit::where('teacher_id',$teacher->id)->get();
                return view('dashboard.rollcall.teacher.course-list',compact('courses'));
            }else{
                Auth::logout();
                return redirect('/login');
            }
        }else{
            Auth::logout();
            return redirect('/login');
        }


}


}
