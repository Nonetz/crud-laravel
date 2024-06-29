<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat Pencarian Pada Laravel – www.malasngoding.com</title>
</head>
<body>
 
<style type="text/css">
.pagination li {
    float: left;
    list-style-type: none;
    margin: 5px;
}
</style>
 
<h2><a href="https://www.malasngoding.com">www.capekngoding.com</a></h2>
<h3>Data Mahasiswa</h3>
 
<p>Cari Data Mahasiswa :</p>
<form action="/mahasiswa/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Mahasiswa .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
</form>

<p>Tambah Data Mahasiswa :</p>
<form action="/mahasiswa/tambah" method="POST">
    @csrf

    <input type="submit" value="Tambah">
</form>
 
<br/>
 
<table border="1">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>Jurusan</th>
        <th>Aksi</th> <!-- Kolom baru untuk opsi edit dan hapus -->
    </tr>
    @foreach($mahasiswa as $m)
    <tr>
        <td>{{ $m->mahasiswa_nama }}</td>
        <td>{{ $m->mahasiswa_nim }}</td>
        <td>{{ $m->mahasiswa_alamat }}</td>
        <td>{{ $m->mahasiswa_jurusan }}</td>
        <td>
            <a href="/mahasiswa/edit/{{ $m->mahasiswa_id }}">Edit</a> | 
            <a href="/mahasiswa/hapus/{{ $m->mahasiswa_id }}">Hapus</a> <!-- Tombol edit dan hapus -->
        </td>
    </tr>
    @endforeach
</table>
 
<br/>
Halaman : {{ $mahasiswa->currentPage() }} <br/>
Jumlah Data : {{ $mahasiswa->total() }} <br/> <!-- Ubah teks 'Total Pegawai' menjadi 'Total Mahasiswa' -->
Data Per Halaman : {{ $mahasiswa->perPage() }} <br/>
 
{{ $mahasiswa->links() }}
 
</body>
</html>
