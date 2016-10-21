@extends('welcome')
@section('content')
<div class="container">
	<div class="row text-center">

		<div class="col-sm-12" style="margin-top: 10em">
			<h3>Laravel Mailer App</h3>
		</div>
		<div class="col-md-12" style="margin-top: 5em">
			<div class="col-md-4">
				<a href="{{ route('mail.index') }}" class="btn btn-info btn-lg btn-block">Send</a>
			</div>
			<div class="col-md-4">
				<a href="{{ action('MailController@index') }}" class="btn btn-danger btn-lg btn-block">Receive</a>
			</div>
			<div class="col-md-4">
				<a href="{{ action('MailController@index') }}" class="btn btn-success btn-lg btn-block">Queue</a>
			</div>
		</div>
	</div>

</div>

@stop
