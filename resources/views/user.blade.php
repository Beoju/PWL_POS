<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
            <td>{{$d->level->level_kode}}</td>
            <td>{{%d->level->level_nama}}</td>
            <tb><a href="/user/ubah/{{$d->user_id}}">Ubah</a>|<a href="/user/hapus/{{$d->user_id}}">Hapus</a> </tb>
        </tr>
        @endforeach
    </table>
</body>
</html>
