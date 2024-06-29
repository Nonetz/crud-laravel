<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel – www.malasngoding.com</title>
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
            margin-bottom: 20px;
        }

        h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        form {
            text-align: left;
            max-width: 400px;
            margin: 0 auto;
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
    <h3>Data Pegawai - Tambah Data</h3>
 
    <a href="/pegawai">Kembali</a>
 
    <br/>
    <br/>
 
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama"> <br/>
        Jabatan <input type="text" name="jabatan"> <br/>
        Umur <input type="number" name="umur"> <br/>
        Alamat <textarea name="alamat"></textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
 
</div>
 
</body>
</html>
