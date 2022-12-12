<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('dashboard/role/index',compact('roles','permissions'));
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

        $role  =  Role::create([
            'name'  => $name,
            'description' => $description
        ]);

        $role->permissions()->sync($request->permission);
        if($role){
            session()->flash('add.role.success','نقش جدید با موفقیت اضافه شد');
            return redirect()->route('role.index');
        }else{
            session()->flash('add.role.error','متاسفانه نقش اضافه نشد ، لطفا دوباره تلاش کنید');
            return redirect()->route('role.index');
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
        $role = Role::findorfail($id);
        $permissions = Permission::all();
        return view('dashboard.role.edit-role', compact('role','permissions'));
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
        $role = Role::findorfail($id);
        $role->update($request->all());
        $role->permissions()->sync($request->permission);
        if($role){
            session()->flash('update-role-success','ویرایش انجام شد');
            return redirect()->route('role.index');
        }else{
            session()->flash('edit-role-error','مشکلی در ویرایش رخ داد لطفا دوباره تلاش کنید');
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
        Role::findorfail($id)->delete();
        session()->flash('delete-role','نقش مورد نظر حذف شد ');
        return back();
    }
}
