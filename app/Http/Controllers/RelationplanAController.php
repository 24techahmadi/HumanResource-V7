<?php

namespace App\Http\Controllers;

use App\RelationplanA;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RelationplanAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd('index works');
        $records = RelationplanA::latest('id')->get();
        return view('relation.reletionplanA_index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relation.reletionplanA_create');
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
        RelationplanA::create($request->all());
        return redirect('relationplanA');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $record = RelationplanA::findOrFail($id);
        return view('relation.reletionplanA_show', compact('record'));
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
        RelationplanA::findOrFail($id);
        return view('relation.reletionplanA_show');
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
        $relationplanA = RelationplanA::findOrFail($id);
        $relationplanA->update($request->all());
        return redirect('relationplanA');
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
