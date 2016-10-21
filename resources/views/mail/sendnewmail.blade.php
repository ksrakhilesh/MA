@extends('welcome')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			@if (Session::has('flashmessage'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss ="alert" aria-hidden ="true">
					&times;
				</button>
				<strong>{{ Session::get('flashmessage') }}</strong>
			</div>
			@endif
		</div>
	</div>

</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style ="margin-top: 0.2em">Laravel Mailer App</h1>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<form action="{{ route('mail.sendmail') }}" method="POST" role="form">
				<legend style="color:#e2e2e2">Send An Email</legend>
				{{ csrf_field() }}
				<div class="form-group col-md-12">
					<label for="email">Email</label>
					<input type="email" name = "email" value="{{ Input::old('email') }}" class="form-control" placeholder="Email Address">
					<label for="subject">Subject</label>
					<input type="text" name = "subject" value="{{ Input::old('subject') }}" class="form-control" placeholder="Subject">
					<label for="message">Message</label>
					<textarea  rows="7" cols="20" name = "message" value="{{ Input::old('message') }}" class="form-control ckeditor" placeholder="Type Your Email"></textarea>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				
			</form> 
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			@if (Session::has('errors'))
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss ="alert" aria-hidden ="true">
					&times;
				</button>
				<strong>{{ $error }}</strong>
			</div>
			@endforeach
			@endif
		</div>
	</div>

</div>


@stop