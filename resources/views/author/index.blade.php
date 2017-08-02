@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Author</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> author
		<div class="panel-title pull-right"><a href="/author/create">tambah data</a>
		</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>nama </th>
						<th colspan="3">action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($author as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>
							<a class="btn btn-warning" href="/author/{{$data->id}}/edit">Edit</a>
						</td>
						<td>
							<a class="btn btn-primary" href="/author/{{$data->id}}">Show</a>
						</td>
						<td>
							<form action="{{route('author.destroy',$data->id)}}" method="post">
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