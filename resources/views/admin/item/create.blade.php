@extends('admin.layout.admin')

@section('content')

	<h3>Add Post</h3>
	<br>
	<br>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			{!! Form::open(['route' => 'item.store','method' => 'post','files' => true]) !!}


			<div class="form-group">
					{{ Form::label('title','Title') }}
					{{ Form::text('title', null, array('class' => 'form-control'))}}
			</div>

			

			<div class="form-group">
					{{ Form::label('description','Description') }}
					{{ Form::textarea('description', null, array('class' => 'form-control','rows' => 8, 'cols' => 40)) }}
			</div>

			<div class="form-group">
					{{ Form::label('image','Image') }}
					{{ Form::file('image',array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
					
					{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}
			</div>



			{!! Form::close() !!}
		</div>

	</div>


@endsection