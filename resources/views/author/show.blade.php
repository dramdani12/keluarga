@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Author</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> author
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
			<form action="{{route('author.update',$or->id)}}" method="POST">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="control-label">nama </label>
				<input type="text" name="a" value="{{$or->nama}}" class="form-control" readonly="">
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection