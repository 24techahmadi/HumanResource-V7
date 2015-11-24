@extends('app')


@section('content')
	<h3> All Available Articles </h3>
	<hr />

	@foreach($articles as $article)
		<article>

			{{--<!-- //first Mode -->--}}
		    {{--<h2> <a href="/articles/{{$article->id}}"> {{ $article->title }} </a> </h2> --}}
			{{----}}
			{{--//second Mode--}}
			 {{--<h2> <a href="{{ action('ArticleController@show', [$article->id]) }}"> {{ $article->title }} </a> </h2>  --}}
			{{----}}

			<!-- //3rd Mode -->
			<h2> <a href="{{url('articles', $article->id)}}"> {{ $article->title }} </a> </h2> 
			
			<div class="author"><b>Author:  </b> {{ $article->author }} </div>
			<div class="content"><b>Content:  </b> {{ $article->content }} </div>
			<div class="content"><b>Province:  </b> {{ $article->province }} </div>
			<div class="content"><b>Gender:  </b> {{ $article->Gender }} </div>
			<div class="content"><b>Colors:  </b> 'RedColors: {{ $article->RedColors }}' , 'YellowColors: {{ $article->YellowColors }}' </div>

		</article>
	@endforeach

@stop
