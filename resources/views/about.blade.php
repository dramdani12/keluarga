<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
		@foreach($ortu as $data)<hr>
		nama_ibu:{{$data->nama_ibu}}<br>
		nama_ayah:{{$data->nama_ayah}}<br>
		umur_ibu:{{$data->umur_ibu}}<br>
		umur_ayah:{{$data->umur_ayah}}<br>
		alamat:{{$data->alamat}}<br><hr>
		@foreach ($data ->budak as  $key ) 
			<li>{{$key->nama}}</li><br><hr>
			@endforeach
		@endforeach

		
</body>
</html>