<!DOCTYPE html>
<html>
<head><title>Tambah Anggota</title></head>
<body>
    <h1>Tambah Anggota</h1>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}"><br>
        @error('nama') <div style="color:red;">{{ $message }}</div> @enderror

        <label>NIM</label><br>
        <input type="text" name="nim" value="{{ old('nim') }}"><br>
        @error('nim') <div style="color:red;">{{ $message }}</div> @enderror

        <label>Email</label><br>
        <input type="text" name="email" value="{{ old('email') }}"><br>
        @error('email') <div style="color:red;">{{ $message }}</div> @enderror

        <label>Nomor Telepon</label><br>
        <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon') }}"><br>
        @error('nomor_telepon') <div style="color:red;">{{ $message }}</div> @enderror

        <label>Alamat</label><br>
        <input type="text" name="alamat" value="{{ old('alamat') }}"><br>
        @error('alamat') <div style="color:red;">{{ $message }}</div> @enderror

        <label>Status</label><br>
        <select name="status">
            <option value="">-- Pilih Status --</option>
            <option value="aktif" @selected(old('status') == 'aktif')>Aktif</option>
            <option value="nonaktif" @selected(old('status') == 'nonaktif')>Nonaktif</option>
        </select><br>
        @error('status') <div style="color:red;">{{ $message }}</div> @enderror

        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>