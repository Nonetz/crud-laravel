<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .search-form {
            margin-bottom: 20px;
            overflow: hidden;
        }

        .search-form input[type="text"] {
            padding: 10px;
            width: 60%;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            float: left;
        }

        .search-form input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            float: left;
            margin-left: 10px;
            transition: background-color 0.3s;
        }

        .search-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .add-form input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-form input[type="submit"]:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        .action-links {
            text-align: center;
        }

        .action-links a {
            display: inline-block;
            margin-right: 10px;
            padding: 6px 12px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .action-links a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .action-links a:last-child {
            margin-right: 0;
        }

        .pagination {
            margin-top: 20px;
            overflow: hidden;
            text-align: center;
        }

        .pagination ul {
            display: inline-block;
            padding: 0;
            margin: 0;
        }

        .pagination li {
            display: inline-block;
            list-style-type: none;
            margin-right: 5px;
        }

        .pagination li a {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-size: 14px;
        }

        .pagination li a:hover {
            background-color: #0056b3;
        }

        .pagination .active a {
            background-color: #0056b3;
        }

        .pagination-info {
            margin-top: 10px;
            text-align: center;
        }

        /* Style untuk tombol logout */
        .logout-form {
            text-align: right;
            margin-bottom: 10px;
        }

        .logout-form form {
            display: inline;
        }

        .logout-form input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #dc3545;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-form input[type="submit"]:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
 
<div class="container">
    <div class="logout-form">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit" value="Logout">
        </form>
    </div>
    <h2><a href="https://www.malasngoding.com" style="text-decoration: none; color: #333;">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>
 
    <div class="search-form">
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai ..." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
    </div>

    <div class="add-form">
        <form action="/pegawai/tambah" method="POST">
            @csrf
            <input type="submit" value="Tambah">
        </form>
    </div>
 
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td class="action-links">
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" style="background-color: #ffc107; border-color: #ffc107; color: #333;">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" style="background-color: #dc3545; border-color: #dc3545; color: #fff;">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 
    <div class="pagination">
        <ul>
            <!-- Tombol-tombol halaman -->
            @if ($pegawai->onFirstPage())
                <!-- Tombol Previous non-aktif di halaman pertama -->
                <li><span>&laquo;</span></li>
            @else
                <!-- Tombol Previous aktif di halaman lain -->
                <li><a href="{{ $pegawai->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif

            <!-- Loop untuk menampilkan nomor halaman -->
            @for ($i = 1; $i <= $pegawai->lastPage(); $i++)
                @if ($i == $pegawai->currentPage())
                    <!-- Halaman saat ini -->
                    <li class="active"><span>{{ $i }}</span></li>
                @else
                    <!-- Halaman lain -->
                    <li><a href="{{ $pegawai->url($i) }}">{{ $i }}</a></li>
                @endif
            @endfor

            <!-- Tombol Next -->
            @if ($pegawai->hasMorePages())
                <li><a href="{{ $pegawai->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li><span>&raquo;</span></li>
            @endif
        </ul>
    </div>

    <div class="pagination-info">
        Showing {{ $pegawai->firstItem() }} to {{ $pegawai->lastItem() }} of {{ $pegawai->total() }} results
    </div>
</div>
 
</body>
</html>
