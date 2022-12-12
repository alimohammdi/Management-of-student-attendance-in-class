<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('dashboard/permission/index',compact('permissions'));
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
           'name' => 'required',
           'description' => 'required'
        ]);

        $name = $request->name;
        $description = $request->description;

        $pernission  =  Permission::create([
            'name'  => $name,
            'description' => $description
        ]);
        if($pernission){
            session()->flash('add.permission.success','دسترسی جدید با موفقیت اضافه شد');
            return redirect()->route('permission.index');
        }else{
            session()->flash('add.permission.error','متاسفانه دسترسی اضافه نشد ، لطفا دوباره تلاش کنید');
            return redirect()->route('permission.index');
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
        $permission = Permission::findorfail($id);
        return view('dashboard.permission.edit-permission', compact('permission'));
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
            'name' => 'required',
            'description' => 'required'
        ]);
        $permission = Permission::whereid($id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
        if($permission){
            session()->flash('update-permission-success','ویرایش انجام شد');
            return redirect()->route('permission.index');
        }else{
            session()->flash('edit-permission-error','مشکلی در ویرایش رخ داد لطفا دوباره تلاش کنید');
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
        Permission::findorfail($id)->delete();
        session()->flash('delete-permission','دسترسی مورد نظر حذف شد ');
        return back();
    }
}
