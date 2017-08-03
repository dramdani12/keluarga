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
				<input type="text" name="a" value="{{$book->title}}" class="form-control" required="">
			</div>
			<div class="form-group">
			<label class="control-label">author</label>
				<select name="b" class="form-control">
				@foreach($author as $data)
				<option value="{{$data->id}}"> {{$data->nama}}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">amount </label>
				<input type="text" name="c" value="{{$book->amount}}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover" class="form-control" required="" value="{{$book->cover}}"></input>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection