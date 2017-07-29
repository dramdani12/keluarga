<!DOCTYPE html>
<html>
<head>
	<title>anak</title>
</head>
<body>
	@foreach($budak as $key)<hr>
		nama:{{$key->nama}}<br>
		ortu_id:{{$key->ortu_id}}<br>
		umur:{{$key->umur}}<br>
		alamat:{{$key->alamat}}<br><hr>
	@endforeach
</body>
</html>