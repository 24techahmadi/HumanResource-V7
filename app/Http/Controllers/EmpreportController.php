<?php

namespace App\Http\Controllers;

use App\Empreport;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmpreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Empreport::latest('id')->get();
        return view('emp.empreport_index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emp.empreport_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this -> validate ($request, ['ExecutionNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        Empreport::create($request->all());
        return redirect('empreport');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $record = Empreport::findOrFail($id);
        return view('emp.empreport_show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        // $this -> validate ($request, ['ExecutionNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        Empreport::findOrFail($id);
        return view('emp.empreport_show');
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
        //$this -> validate ($request, ['ExecutionNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        $empreport = Empreport::findOrFail($id);
        $empreport->update($request->all());
        return redirect('empreport');
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
