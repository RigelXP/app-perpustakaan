<!DOCTYPE html>
<html>
<head><title>Daftar Anggota</title></head>
<body>
    <h1>Daftar Anggota</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('members.create') }}">Tambah Anggota</a>

    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th><th>NIM</th><th>Email</th><th>No. Telepon</th><th>Alamat</th><th>Status</th>
        </tr>
        @foreach ($members as $member)
        <tr>
            <td>{{ $member['nama'] }}</td>
            <td>{{ $member['nim'] }}</td>
            <td>{{ $member['email'] }}</td>
            <td>{{ $member['nomor_telepon'] }}</td>
            <td>{{ $member['alamat'] }}</td>
            <td>{{ $member['status'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>