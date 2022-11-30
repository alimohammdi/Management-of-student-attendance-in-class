<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Addunit;
use App\Models\College;
use App\Models\Course;
use App\Models\Selectunit;
use Illuminate\Http\Request;

class SelectUnitController extends Controller
{
     public function selectcollege(){
         $colleges = College::all();
         return view('dashboard.selectUnit.select-college',compact('colleges'));
     }

    public function index(Request $request)
    {
        $college = $request->college ;
        if(isset($college)){
            $units = Addunit::where('college_id',$college)->get();
            return view('dashboard.selectUnit.index',compact('units','college'));
        }else{
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
           'code_course'  => 'required'
        ]);
          $code = $request->code_course;
          $user_id = 2;
          if(isset($user_id)){
               $unit_code = Course::where('code',$code)->first();
               if(!empty($unit_code)){
                    $unit = Addunit::where('course_id',$unit_code->id)->first();
                    $check = Selectunit::where('unit_id',$unit->id)->where('user_id',$user_id)->first();
                    if($check){
                        session()->flash('select.unit.error','واحد مورد نظر قبلا برای شما انتخاب شده است');
                        return back();
                    }else{
                        $select_unit = Selectunit::create([
                            'unit_id' => $unit->id,
                            'user_id' => $user_id
                        ]);
                        if($select_unit){
                            session()->flash('select.unit.success'," واحد مورد نظر با کد"  . $code." برای شما ثبت شد");
                            return back();
                        }else{
                            session()->flash('select.unit.error','مشکلی در انتخاب واحد رخ داد لطفا دوباره تلاش کنید');
                            return back();
                        }
                    }
               }else{
                   session()->flash('select.unit.error',"کد "  . $code." یافت نشد لطفا دوباره تلاش کنید");
                   return back();
               }
          }else{
              session()->flash('select.unit.error','احراز هویت انجام نشده لطفا وارد شوید');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
