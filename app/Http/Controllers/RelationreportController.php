<?php

namespace App\Http\Controllers;

use App\Relationreport;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RelationreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Relationreport::latest('id')->get();
        return view('relation.relationreport_index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relation.relationreport_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this -> validate ($request, ['relationNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        Relationreport::create($request->all());
        return redirect('relationreport');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $record = Relationreport::findOrFail($id);
        return view('relation.relationreport_show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        // $this -> validate ($request, ['relationNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        Relationreport::findOrFail($id);
        return view('relation.relationreport_show');
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
        //$this -> validate ($request, ['relationNumber' => 'required', 'Name' => 'required', 'FatherName'=>'required','EmployeeNumber'=>'required']);
        $relationreport = Relationreport::findOrFail($id);
        $relationreport->update($request->all());
        return redirect('relationreport');
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