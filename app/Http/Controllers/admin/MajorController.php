<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Major::all();
        $colleges = College::all();
        return view('dashboard.major.index',compact('majors','colleges'));
    }

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
            'name' => 'required',
            'college' => 'required'
        ]);
        $updateMajor = Major::create([
            'name' => $request->name,
            'college_id' => $request->college
        ]);
        if($updateMajor){
            session()->flash('add-major','افزودن دانشکده موفقیت امیز بود');
            return back();
        }else{
            session()->flash('add-major','افزودن دانشکده موفقیت امیز نبود');
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
        $major = Major::findorfail($id);
        $colleges = College::all();
        return view('dashboard.major.edit-major',compact('colleges','major'));
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
            'name' => 'required|string',
            'college' => 'required'
        ]);
        $major = Major::whereid($id)->update([
            'name' => $request->name,
            'college_id' => $request->college
        ]);
        if($major){
            session()->flash('update-major-success','ویرایش انجام شد');
            return redirect()->route('major.index');
        }else{
            session()->flash('edit-major-error','مشکلی در ویرایش رخ داد لطفا دوباره تلاش کنید');
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
        Major::findorfail($id)->delete();
        session()->flash('delete-major','رشته حذف شد');
        return back();
    }
}
