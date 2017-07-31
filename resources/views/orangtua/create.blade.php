@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>data orang tua</h1></center>
	<div class="panel panel-primery">
		<div class="panel-heading"> data orangtua
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
			<form action="{{route('orangtua.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-label">nama ayah</label>
				<input type="text" name="a" class="form-control" required="">
			</div>
			<div class="form-group">
			<label class="control-label">nama ibu</label>
				<input type="text" name="b" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">umur ayah</label>
				<input type="text" name="c" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">umur ibu</label>
				<input type="text" name="d" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">alamat</label>
				<textarea class="form-control" name="e" required=""></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-succes">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection