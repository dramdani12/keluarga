@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>data anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> data anak
		<div class="panel-title pull-right"><a href="/anak/create">tambah data</a>
		</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>nama </th>
						<th>nama orangtua</th>
						<th>umur </th>
						<th>alamat</th>
						<th colspan="3">action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($anak as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->ortu->nama_ayah}} dan {{$data->ortu->nama_ibu}}</td>
						<td>{{$data->umur}}</td>
						<td>{{$data->alamat}}</td>
						<td>
							<a class="btn btn-warning" href="/anak/{{$data->id}}/edit">Edit</a>
						</td>
						<td>
							<a class="btn btn-primary" href="/anak/{{$data->id}}">Show</a>
						</td>
						<td>
							<form action="{{route('anak.destroy',$data->id)}}" method="post">
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