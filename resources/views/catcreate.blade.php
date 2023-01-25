<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Input Data</h1>
    <a href="/home">Kembali</a>
    <form action="/input" method="post">
        @csrf
     <label for="nama" >Nama</label><br>
     <input type="varchar" name="nama" id="nama" ><br>
     <label for="tanggal_lahir" >Tanggal lahir</label><br>
     <input type="date" name="tanggal_lahir" id="tanggal_lahir"  required ><br>
     <label for="alamat" >Alamat</label><br>
     <input type="varchar" name="alamat" id="alamat" ><br>
     <label for="agama" >Agama</label><br>
     <input type="varchar" name="agama" id="agama" ><br>
     <label for="jenis_kelamin" >Jenis Kelamin</label><br>
     <input type="varchar" name="jenis_kelamin" id="jenis_kelamin" ><br>
     <button type="submit">Submit</button><br>
 </form>
</body>
</html>