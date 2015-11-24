<?php

namespace App\Http\Controllers;
use App\Interview;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interviews = Interview::latest('id')->get();
        return view('emp.Interview_Index',compact('interviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emp.Interview_Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate ($request, ['Name' => 'required', 'LastName' => 'required', 'Job'=>'required','CommiteePosition'=>'required','Date'=>'required']);
         Interview::create($request->all()); //create the article records and save that to the database

        return redirect('interview'); //redirect back to the articles view
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interview = Interview::findOrFail($id);
        return view('emp.Interview_Show', compact('interview'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $this -> validate ($request, ['Name' => 'required', 'LastName' => 'required', 'Job'=>'required','CommiteePosition'=>'required','Date'=>'required']);
        $interview_edit = Interview::findOrFail($id);
        return view('emp.Interview_Show', compact('interview_edit'));
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
        $this -> validate ($request, ['Name' => 'required', 'LastName' => 'required', 'Job'=>'required','CommiteePosition'=>'required','Date'=>'required']);
        $interview = Interview::findOrFail($id);
        $interview->update($request->all());
        return redirect('interview');
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
