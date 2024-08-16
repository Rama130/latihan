<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Mahasiswa</title>
</head>
<body>
    
    <h2>View Mahasiswa | <a href="{{url('mahasiswa/create')}}">Input</a></h2>
    <table border=1>

        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Jurusan</th>
            <th>Aksi</th>
        </tr>

        @foreach ( $mahasiswa as $mahasiswa )
            <tr>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
                <td>{{ $mahasiswa->kodejurusan }}</td>
                <td>
                    <a href="{{ url('mahasiswa').'/'.$mahasiswa->nim.'/edit' }}">Edit</a>&nbsp;&nbsp;&nbsp;
                    <a href="{{ url('mahasiswa').'/'.$mahasiswa->nim.'/delete' }}">Hapus</a>
                </td>
            </tr>
        @endforeach

    </table>

</body>
</html>