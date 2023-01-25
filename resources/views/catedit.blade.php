<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<h1>Form Data</h1>
    <form action="/update/{{ $datas->id }}" method="post">
        @csrf
        @method('put')
        <ul>
             <li><label for="nama" >Nama</label></li>
              <input type="text" name="nama" id="nama" value="{{ $datas->nama }}">
             <li><label for="tanggal_lahir" >Tanggal lahir</label></li>
              <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $datas->tanggal_lahir }}">
             <li><label for="alamat" >Alamat</label></li>
              <input type="text" name="alamat" id="alamat" value="{{ $datas->alamat }}">
             <li><label for="agama" >Agama</label></li>
              <input type="text" name="agama" id="agama" value="{{ $datas->agama }}">
              <li><label for="jenis_kelamin" >Jenis Kelamin</label></li>
              <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{ $datas->jenis_kelamin }}">
             <li><button type="submit">Update</button></li>
        </ul>
</body>
</html>