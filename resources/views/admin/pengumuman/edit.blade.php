<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengumuman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #E5E5E5;
            font-family: 'Poppins', sans-serif;
        }

        .container-form {
            max-width: 1100px;
            margin: 60px auto;
            background: #fff;
            padding: 45px 55px;
            border-radius: 14px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.18);
            border-top: 10px solid #D32F2F;
        }

        h3 {
            font-weight: 700;
            color: #D32F2F;
            margin-bottom: 35px;
        }

        .form-group {
            margin-bottom: 26px;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 15px 18px;
            border-radius: 8px;
            border: 2px solid #ddd;
            background: #F9F9F9;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            border-color: #D32F2F;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(211,47,47,0.15);
        }

        textarea.form-control {
            min-height: 140px;
            resize: vertical;
        }

        .section-title {
            font-weight: 600;
            color: #D32F2F;
            margin: 40px 0 20px;
            font-size: 15px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 45px;
        }

        .btn-save {
            background: #D32F2F;
            color: #fff;
            border: none;
            padding: 14px 40px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .btn-save:hover {
            background: #8E1E1E;
            transform: translateY(-2px);
        }

        .btn-back {
            padding: 14px 40px;
            border-radius: 8px;
            border: 2px solid #D32F2F;
            color: #D32F2F;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
        }

        .btn-back:hover {
            background: #D32F2F;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container-form">
    <h3>Edit Pengumuman</h3>

    <form action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- JUDUL -->
        <div class="form-group">
            <label>Judul Pengumuman</label>
            <input type="text" name="judul" class="form-control"
                   value="{{ old('judul', $pengumuman->judul) }}" required>
        </div>

        <!-- DESKRIPSI -->
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi', $pengumuman->deskripsi) }}</textarea>
        </div>

        <div class="section-title">Informasi Pelaksanaan</div>

        <!-- WAKTU -->
        <div class="form-group">
            <label>Waktu</label>
            <input type="text" name="waktu" class="form-control"
                   value="{{ old('waktu', $pengumuman->waktu) }}">
        </div>

        <!-- LOKASI -->
        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control"
                   value="{{ old('lokasi', $pengumuman->lokasi) }}">
        </div>

        <div class="section-title">Ketentuan & Peserta</div>

        <!-- KETENTUAN -->
        <div class="form-group">
            <label>Ketentuan</label>
            <textarea name="ketentuan" class="form-control">{{ old('ketentuan', $pengumuman->ketentuan) }}</textarea>
        </div>

        <!-- PESERTA -->
        <div class="form-group">
            <label>Peserta</label>
            <textarea name="peserta" class="form-control">{{ old('peserta', $pengumuman->peserta) }}</textarea>
        </div>

        <!-- BUTTON -->
        <div class="form-actions">
            <a href="{{ route('admin.pengumuman') }}" class="btn-back">Kembali</a>
            <button type="submit" class="btn-save">Simpan Perubahan</button>
        </div>
    </form>
</div>

</body>
</html>
