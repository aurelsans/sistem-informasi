<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Berita</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <style>
         .body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
         }

         .container {
            display: flex;
         }

         .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
         }

         .sidebar h2 {
            text-align: center;
         }

         .sidebar ul {
            list-style-type: none;
            padding: 0;
         }

         .sidebar ul li a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 0;
         }

         .sidebar ul li a:hover {
            background-color: #555;
         }

         .sidebar ul li a.active {
            font-weight: bold;
         }

         .content {
            flex: 1;
            padding: 20px;
         }

         .news {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
         }

         .news-item {
            border: 1px solid #ccc;
            padding: 15px;
         }

         .news-item h3 {
            margin-top: 0;
         }

         .news-item a {
            color: #007bff;
            text-decoration: none;
         }

         .news-item a:hover {
            text-decoration: underline;
         }
</style>
    <div class="container">
        <aside class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="#" class="active">Beranda</a></li>
                <li><a href="#">Penelitian</a></li>
                <li><a href="#">Kemahasiswaan</a></li>
                <li><a href="#">Kurikulum</a></li>
                <li><a href="#">Tentang</a></li>
            </ul>
        </aside>
        <main class="content">
            <h1>Prestasi Mahasiswa</h1>
            <a href="/tambahprestasi"><button>Tambah Prestasi</button></a>

            @foreach($prestasi as $p)
            <div class="news">
                <div class="news-item">
                     <img src="{{ asset('foto_prestasi/' . $p->gambar_prestasi) }}" alt="" style="width: 200px; height: auto;">
                    <h3>{{$p->judul_prestasi}}</h3>
                    <p>{{$p->deskripsi_prestasi}}</p>
                    <a href="/editprestasi/{{ $p->id }}"><button>Edit</button></a>
                </div>
            </div>
            @endforeach
        </main>
    </div>
</body>
</html>
