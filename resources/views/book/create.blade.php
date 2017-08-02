@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> book
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
		{{-- {!! form::open(array('route'=>'book.store','enctype'=>'multipart/form-data','files'=>'true'))!!}--}}
			<form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-label">title </label>
				<input type="text" name="a" class="form-control" required="">
			</div>
			<div class="form-group">
			<label class="control-label">Author</label>
				<select name="b" class="form-control">
				<option value="0" selected="true" disabled="true">select penulis </option>
					@foreach($author as $data)
					<option value="{{$data->id}}">{{$data->nama}} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">amount</label>
				<input type="number" name="c" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover"  required="">
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