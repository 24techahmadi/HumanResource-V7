<?php

namespace App\Http\Controllers;

use App\EvaluationplanA;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EvaluationplanAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = EvaluationplanA::latest('id')->get();
        return view('evaluation.evaluationplanA_index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluation.evaluationplanA_create');
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
        EvaluationplanA::create($request->all());
        return redirect('evaluationplanA');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $record = EvaluationplanA::findOrFail($id);
        return view('evaluation.evaluationplanA_show', compact('record'));
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
        EvaluationplanA::findOrFail($id);
        return view('evaluation.evaluationplanA_show');
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
        $evaluationplanA = EvaluationplanA::findOrFail($id);
        $evaluationplanA->update($request->all());
        return redirect('evaluationplanA');
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
