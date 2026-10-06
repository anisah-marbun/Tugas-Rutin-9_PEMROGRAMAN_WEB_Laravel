<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Data Mahasiswa</h1>

    @foreach ($mahasiswa as $mhs)
        <div>
            <h3>{{ $mhs['nama'] }}</h3>
            <p>NIM: {{ $mhs['nim'] }}</p>
            <p>Jurusan: {{ $mhs['jurusan'] }}</p>
        </div>
        <hr>
    @endforeach

</body>
</html>