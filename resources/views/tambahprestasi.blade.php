<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prestasi</title>
</head>
<body>
    <h2>Form Prestasi</h2>
    <form action="/simpanprestasi" method="post" enctype="multipart/form-data">
    @csrf <!-- Laravel CSRF token -->
        <label for="gambar_prestasi">Gambar Prestasi:</label><br>
        <input type="file" id="gambar_prestasi" name="gambar_prestasi"><br><br>

        <label for="judul_prestasi">Judul Prestasi:</label><br>
        <input type="text" id="judul_prestasi" name="judul_prestasi"><br><br>

        <label for="deskripsi_prestasi">Deskripsi Prestasi:</label><br>
        <textarea id="deskripsi_prestasi" name="deskripsi_prestasi" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
