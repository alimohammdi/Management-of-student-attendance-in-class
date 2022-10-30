<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Clases;
use App\Models\College;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::all();
        $classes = Clases::all();
        return view('dashboard.class.index',compact('classes','colleges'));
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
           'classNumber' =>'required',
            'college' => 'required|integer'
        ]);
        $addClass  = Clases::create([
        'classNumber' => $request->classNumber,
         'college_id' =>  $request->college
        ]);
        if($addClass){
            session()->flash('add-class-success','کلاس اضافه شد');
            return redirect()->route('class.index');
        }else{
            session()->flash('add-class-error','مشکلی در افزودن رخ داد لطفا دوباره تلاش کنید');
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
        $colleges = College::all();
        $class = Clases::findorfail($id);
        return view('dashboard.class.edit',compact('class','colleges'));
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
           'college' => 'required',
           'classNumber' => 'required|integer'
        ]);

        $class = Clases::whereid($id)->update([
            'classNumber' => $request->classNumber,
            'college_id' => $request->college
        ]);
        if($class){
            session()->flash('update-class-success','ویرایش انجام شد');
            return redirect()->route('class.index');
        }else{
            session()->flash('update-class-error','مشکلی در ویرایش رخ داد لطفا دوباره تلاش کنید');
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
        Clases::findorfail($id)->delete();
        session()->flash('delete-class',' حذف شد');
        return back();
    }
}
