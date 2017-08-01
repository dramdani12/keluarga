@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>data anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> data anak
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
			<form action="{{route('anak.update',$anak->id)}}" method="POST">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="control-label">nama</label>
				<input type="text" name="a" value="{{$anak->nama}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
			<label class="control-label">nama orangtua</label>
				<input type="text" name="b" value=" {{$anak->ortu->nama_ayah}} dan {{$anak->ortu->nama_ibu}}" class="form-control" readonly="">
				</input>
			</div>
			<div class="form-group">
				<label class="control-label">umur </label>
				<input type="text" name="c" value="{{$anak->umur}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">alamat</label>
				<textarea class="form-control" name="d" readonly="">{{$anak->alamat}}</textarea>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection