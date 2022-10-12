<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('dashboard.college.index',compact('colleges'));
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
           'name' => 'required'
        ]);
        $updateCollege = College::create([
            'value' => $request->name
        ]);
        if($updateCollege){
            session()->flash('add-college','افزودن دانشکده موفقیت امیز بود');
            return back();
        }else{
            session()->flash('add-college','افزودن دانشکده موفقیت امیز نبود');
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


    public function edit($id)
    {
        $college = College::findorfail($id);
        return view('dashboard.college.edit-college',compact('college'));
    }

    public function update(Request $request, $id)
    {
          $request->validate([
           'name' => 'required|string'
        ]);
        $college = College::whereid($id)->update([
            'value' => $request->name
        ]);
        if($college){
            session()->flash('update-college-success','ویرایش انجام شد');
            return redirect()->route('college.index');
        }else{
            session()->flash('edit-college-error','مشکلی در ویرایش رخ داد لطفا دوباره تلاش کنید');
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
        College::findorfail($id)->delete();
        session()->flash('delete-college','دانشکده حذف شد');
        return back();
    }
}
