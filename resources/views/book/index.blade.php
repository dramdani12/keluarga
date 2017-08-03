@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> book
		<div class="panel-title pull-right"><a href="/book/create">tambah data</a>
		</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>title </th>
						<th>nama author</th>
						<th>amount </th>
						<th>cover</th>
						<th colspan="3">action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($book as $data)
					<tr>
						<td>{{$data->title}}</td>
						<td>{{$data->author->nama}}</td>
						<td>{{$data->amount}}</td>
						<td>
						<img src="{{asset('/img/'.$data->cover.'')}}" height="100px" width="100px"></td><td>
							<a class="btn btn-warning" href="/book/{{$data->id}}/edit">Edit</a>
						</td>
						<td>
							<a class="btn btn-primary" href="/book/{{$data->id}}">Show</a>
						</td>
						<td>
							<form action="{{route('book.destroy',$data->id)}}" method="post">
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