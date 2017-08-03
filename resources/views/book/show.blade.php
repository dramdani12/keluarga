@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> book
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
			<form action="{{route('book.update',$book->id)}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="control-label">title</label>
				<input type="text" name="a" value="{{$book->title}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
			<label class="control-label">author</label>
			<input type="text" name="b" value="{{$book->author->nama}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">amount </label>
				<input type="text" name="c" value="{{$book->amount}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">cover</label>
				<img src="{{asset('/img/'.$book->cover.'')}}" width="100px" height="100px">
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection