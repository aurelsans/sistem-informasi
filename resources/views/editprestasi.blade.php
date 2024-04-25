<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prestasi</title>
</head>
<body>
    <h2>Form Prestasi</h2>
    @foreach($edit as $e)
    <form action="/updateprestasi" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $e->id }}">

        <img src="{{ asset('foto_prestasi/' . $e->gambar_prestasi) }}" alt="" style="width: 200px; height: auto;">

        <label for="gambar_prestasi">Gambar Prestasi:</label><br>
        <input type="file" id="gambar_prestasi" name="gambar_prestasi"><br><br>

        <label for="judul_prestasi">Judul Prestasi:</label><br>
        <input type="text" id="judul_prestasi" name="judul_prestasi" value="{{ $e->judul_prestasi }}"><br><br>

        <label for="deskripsi_prestasi">Deskripsi Prestasi:</label><br>
        <textarea id="deskripsi_prestasi" name="deskripsi_prestasi" rows="4" cols="50">{{ $e->deskripsi_prestasi }}</textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    @endforeach
</body>
</html>
