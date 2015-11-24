<?php

namespace App\Http\Controllers;
use App\P2form;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class P2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = P2form::latest('id')->get();
        return view('emp.p2_index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emp.p2_create');
    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
    public function store(Request $request)
    {
       // $this -> validate ($request, ['ExecutionNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        P2form::create($request->all());
        return redirect('p2form');
    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
    public function show($id)
    {

        $record = P2form::findOrFail($id);
        return view('emp.p2_show', compact('record'));
    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
    public function edit(Request $request, $id)
    {
       // $this -> validate ($request, ['ExecutionNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        P2form::findOrFail($id);
        return view('emp.p2_show');
    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
    public function update(Request $request, $id)
    {
       // $this -> validate ($request, ['ExecutionNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        $p2form = P2form::findOrFail($id);
        $p2form->update($request->all());
        return redirect('p2form');
    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
    public function destroy($id)
    {
        //
    }
}
