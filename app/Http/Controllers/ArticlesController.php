<?php

namespace App\Http\Controllers;
use App\Article;

//1- Use Facade
    //use Request;
    //use App\Http\Requests;
    //use App\Http\Controllers\Controller;

//2- use with our own Request class like ArticlesRequest
//     use App\Http\Requests;
//     use App\Http\Requests\ArticlesRequest;
//     use Illuminate\HttpResponse;
//     use App\Http\Controllers\Controller;

//3- use with Laravel General Request class and controller validation
//     use App\Http\Requests;
//     use Illuminate\Http\Request;
//     use App\Http\Controllers\Controller;

//3- all
    use App\Http\Requests;
    use App\Http\Requests\ArticlesRequest;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest('id')->get();
         return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
//1- sed With General Request Class of Laravel with Facade
    //     public function store()
    //     {
    //         //working with Facade
    //         $input = Request::all(); //Fetch all input from the form
    //         Article::create($input); //create the article records and save that to the database
    //         return redirect('articles'); //redirect back to the articles view
    //     }

//2- Used With our own Request Class called ArticlesRequest and validation
         public function store(ArticlesRequest $request)
     {
         Article::create($request->all()); //create the article records and save that to the database
         return redirect('articles'); //redirect back to the articles view
     }

//3- Used from Laravel General Request class and controller validation
//         public function store(Request $request)
//     {
//         $this -> validate ($request, ['title' => 'required | min:4', 'author' => 'required', 'content'=>'required']);
//         Article::create($request->all()); //create the article records and save that to the database
//         return redirect('articles'); //redirect back to the articles view
//     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticlesRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
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
