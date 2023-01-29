<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Addunit;
use App\Models\Clases;
use App\Models\Selectunit;
use App\Models\Student;
use App\Models\Time;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use function PHPUnit\Framework\isNull;

class RollcallController extends Controller
{
    public function weekDay(){

date_default_timezone_set("Asia/Tehran");
$MyDate = date("N",time());

switch ($MyDate){
    case 1 :
        return "دوشنبه";
        break;
    case 2 :
        return "سه شنبه";
        break;

    case 3 :
        return "چهارشنبه";
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
                $check_class = Selectunit::where('unit_id',$unitID)->where('user_id',$studentID)->first();
                if(!empty($check_class)){

                    return $check_class;

                }else{
                    return 'واحد درسی مورد نظر برای شما ثبت نشده ';
                }

            }elseif(!empty($unitTime2) & empty($unitTime1)){

            }else{
                return 'در این زمان درسی برای این کلاس تعریف نشده ';
            }
        }else{
           return 'در این زمان درسی برای این کلاس تعریف نشده ';
        }





    }

    public function show($id)
    {
        //
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



}
