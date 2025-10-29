<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Tambah</title>
</head>

<body>
    <h1>Form Tambah-tambahan</h1>
    <form action="{{ route('storeTambah') }}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" placeholder="Masukkan Angka" name="angka1">
        <br><br>
        <label for="">Angka 2</label>
        <input type="text" placeholder="Masukkan Angka" name="angka2">
        <br><br>
        <button type="submit">Simpan</button>
    </form>

    <p>Hasilnya adalah : <strong>{{$jumlah ?? 0}}</strong></p>
</body>

</html>
