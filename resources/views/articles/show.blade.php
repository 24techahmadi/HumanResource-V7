@extends('app')

@section('title')
	<h1> {{$article->title}} </h1>
@stop

@section('content')
	<article>Author: {{$article->author}} </article>
	<article>Body: {{$article->content}} </article>
	<article>Province: {{$article->province}} </article>
	<article>Gender: {{$article->Gender}} </article>
	<article>Colors:  'RedColors: {{ $article->RedColors }}' , 'YellowColors: {{ $article->YellowColors }}'  </article>

@stop
