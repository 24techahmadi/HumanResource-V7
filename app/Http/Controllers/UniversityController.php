<?php

namespace App\Http\Controllers\Admin;

use App\university;
use App\Http\Requests\Admin\AdminUnivReq;
use App\Http\Controllers\Controller;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities=university::latest()->get();
        $universityCount=university::count();
        return view('admin.universities_lists',compact('universities','universityCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.register_university');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUnivReq $request)
    {
        $university = $request->all();
      //  dd($university);
        university::create($university);
        return redirect('admin/universities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $univDetail = university::find($id);
        if(is_null($univDetail)){
            abort(404);
        }
        return view('admin.edit_university',compact('univDetail'));
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
    public function update($id, AdminUnivReq $request)
    {
        $university = university::find($id);
        $input = $request->all();
     //   dd($input);
        $university->fill($input)->save();
      //  $univ->update();
        return redirect('/admin/universities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $university = university::find($id);
        $university->delete();
        //   $user->destroy($id);
        return redirect('/admin/universities');
    }
    /* testing */
    public function test(){
          return 'Hello world';
     //   return view('university.adminDashboard');
    }
}
