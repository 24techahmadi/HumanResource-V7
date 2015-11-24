@extends('app')


@section('content')

    <h1> Write a New Articel </h1>

    <hr />


    <form action="{{ url('articles') }}" method="POST">
    {!! csrf_field() !!}
   	
	   	<div class="form-group">

	   		Title: <input type="text" name="title" class="form-control">
	   		Author: <input type="text" name="author" class="form-control">
	   		Content: <input type="text" name="content" class="form-control">
	<br />
			Select Province:
			<select class="form-control"  name="province">
				<option value="" disabled selected>Please Select</option>
				<option value="Herat">Herat</option>
				<option value="Mazar">Mazar</option>
				<option value="Kabul">Kabul</option>
			</select>
	<br />

			<div class="input-field col s6">
				<label for="Gender">Gender</label>
				<br />
				<p>
					<input name="Gender" checked value="Male" type="radio" id="test3" />
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
						<label for="RedColors">Red</label>
					</p>
					<p>
						<input name="YellowColors" value="True" type="checkbox" id="test6" checked="checked" />
						<label for="YellowColors">Yellow</label>
					</p>
			</div>

	   	</div>
	    <button type="submit" class="btn btn-primary form-control">Add Article</button>

	</form>

	  <!-- //Our view will always have a access to a errors variable -->

    @include('errors.testErrors');

@stop