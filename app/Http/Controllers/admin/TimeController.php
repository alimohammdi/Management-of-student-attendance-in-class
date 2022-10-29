<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::all();
        return view('dashboard.time.index',compact('times'));
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
           'weekDay' => 'required|string',
            'time'   => 'required|integer'
         ]);

        $weekDay = Time::where('weekDay', '=', $request->weekDay)->where('time', '=', $request->time)->first();

        if($weekDay){
            session()->flash('exist-time','زمانبندی موجود میباشد');
            return back();
        }else{
            $updateTime = Time::create([
                'weekDay' => $request->weekDay,
                'time' => $request->time
                ]);
            if($updateTime){
                session()->flash('add-time','افزودن زمانبندی موفقیت امیز بود');
                return back();
            }else{
                session()->flash('add-time','افزودن زمانبندی موفقیت امیز نبود');
                return back();
            }
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
        $time = Time::findorfail($id);
        return view('dashboard.time.edit-time',compact('time'));
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
        $request->validate([
           'weekDay' => 'required',
           'time' => 'required',
        ]);
        $updateTime = Time::whereid($id)->update([
                'weekDay' => $request->weekDay,
                'time' => $request->time
            ]
        );
        if($updateTime){
            session()->flash('update-time-success','ویرایش انجام شد');
            return redirect()->route('time.index');
        }else{
            session()->flash('edit-time-error','مشکلی در ویرایش رخ داد لطفا دوباره تلاش کنید');
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
        time::findorfail($id)->delete();
        session()->flash('delete-time','زمانبندی حذف شد');
        return back();
    }
}
