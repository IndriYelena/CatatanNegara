<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Catatan Negara </p>
    <a href = "/input">Input Data</a>
    <?php
    $no = 1; 
    foreach ($datas as $datdir) :?>
        <p><?= $no++; ?>. Nama : <?= $datdir->nama ?></p>
        <p> Tanggal lahir : <?= $datdir->tanggal_lahir ?></p>
        <P> Alamat : <?= $datdir->alamat ?></p>
        <p> Agama : <?= $datdir->agama ?></p>
        <p> Jenis kelamin : <?= $datdir->jenis_kelamin ?></p>
        <a href="/home/{{ $datdir->id }}">Detail</a>
    <a href="/edit/{{ $datdir->id }}">Edit</a>
    <form action="/delete/{{ $datdir->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
    <?php endforeach; ?>
</body>
</html>