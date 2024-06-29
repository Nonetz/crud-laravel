<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai - Tutorial Membuat CRUD Pada Laravel – www.malasngoding.com</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Untuk vertikal centering */
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        form {
            text-align: left; /* Untuk mengatur form ke kiri */
        }

        form input[type="text"],
        form input[type="number"],
        form textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        form input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        form textarea {
            height: 100px;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
 
<div class="container">
    <h2><a href="https://www.malasngoding.com" style="text-decoration: none; color: #333;">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>
 
    <a href="/pegawai">Kembali</a>
 
    <br/>
    <br/>
 
    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"><br/>
        Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"><br/>
        Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"><br/>
        Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"><br/>
        Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea><br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
 
</div>
 
</body>
</html>
