@extends('app')

@section('content')

    <h1>Edit!: {!! $article->title !!}</h1>
    <hr />
    <form action="{{ route('articles.update',['id'=>$article]) }}" method="post">
   {!! csrf_field() !!}
    <input name="_method" type="hidden" value="PATCH">

	   	<div class="form-group">

	   		Title: <input type="text" name="title" class="form-control" value="{{ $article->title }}">
	   		Author: <input type="text" name="author" class="form-control" value="{{ $article->author }}">
	   		Content: <input type="text" name="content" class="form-control" value="{{ $article->content }}">
			Province:

			<select class="form-control"  name="province" >
				<option value=""  disabled>{{ $article->province }}</option>
				<option value="Herat">Herat</option>
				<option value="Mazar">Mazar</option>
				<option value="Kabul">Kabul</option>
			</select>
	   	</div>

		<div class="input-field col s6">
			<label for="Gender">Gender</label>
			<br />
			<p>
				<input name="Gender" value="Male" type="radio" id="test3" />
				<label for="Male" >Male</label>
			</p>
			<p>
				<input name="Gender" value="Female" type="radio" id="test4" />
				<label for="Female">Female</label>
			</p>
		</div>
		<br />

		<div class="col s12 m8 l9">
			<label for="Colors">Select Colors</label>

			<p>
				<input name="RedColors" value="True" type="checkbox" id="test5" />
				<label for="Red">Red</label>
			</p>
			<p>
				<input name="YellowColors" value="True" type="checkbox" id="test6" checked="checked" />
				<label for="YellowColors">Yellow</label>
			</p>
		</div>
	    <button type="submit" class="btn btn-primary form-control">Update</button>

	</form>

	  <!-- //Our view will always have a access to a errors variable -->

    @include('errors.testErrors');

@stop