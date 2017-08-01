@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>data orang tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> data orangtua
		<div class="panel-title pull-right"><a href="/orangtua/create">tambah data</a>
		</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>nama ayah</th>
						<th>nama ibu</th>
						<th>umur ayah</th>
						<th>umur ibu</th>
						<th>alamat</th>
						<th>nama anak</th>
						<th colspan="3">action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ortu as $data)
					<tr>
						<td>{{$data->nama_ayah}}</td>
						<td>{{$data->nama_ibu}}</td>
						<td>{{$data->umur_ayah}}</td>
						<td>{{$data->umur_ibu}}</td>
						<td>{{$data->alamat}}</td>
						<td>
							@foreach($data->budak as $a)
							<li>{{$a->nama}}</li>
							@endforeach
						</td>
						<td>
							<a class="btn btn-warning" href="/orangtua/{{$data->id}}/edit">Edit</a>
						</td>
						<td>
							<a class="btn btn-primary" href="/orangtua/{{$data->id}}">Show</a>
						</td>
						<td>
							<form action="{{route('orangtua.destroy',$data->id)}}" method="post">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token">
							<input type="submit" class="btn btn-danger"  value="Delete">
							{{csrf_field()}}</imput>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		</div>
	</div>
</div>
</div>
@endsection