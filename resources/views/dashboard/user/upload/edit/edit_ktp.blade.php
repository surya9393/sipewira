<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($dataupload as $p)
	<form action="/upload/update" method="post">
		@csrf
		<input type="hidden" name="id" value="{{ $p->user_id }}"> <br/>
		Nama <input type="text" required="required" name="ktp" value="{{ $p->ktp }}"> <br/>
		Jabatan <input type="text" required="required" name="npwp" value="{{ $p->npwp }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
