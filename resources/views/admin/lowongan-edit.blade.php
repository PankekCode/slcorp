<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Lowongan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #E5E5E5;
            font-family: 'Poppins', sans-serif;
        }

        .lowongan-form {
            max-width: 700px;
            margin: 70px auto;
            background: linear-gradient(135deg, #D32F2F, #8E1E1E);
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.25);
            color: #fff;
        }

        .lowongan-form h4 {
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        .lowongan-form label {
            font-weight: 600;
        }

        .lowongan-form .form-control {
            border-radius: 12px;
            border: none;
            padding: 12px 15px;
        }

        .btn-simpan {
            background: #fff;
            color: #D32F2F;
            font-weight: 600;
            border-radius: 25px;
            padding: 10px 26px;
            border: none;
        }

        .btn-kembali {
            border: 2px solid #fff;
            color: #fff;
            border-radius: 25px;
            padding: 10px 26px;
            margin-left: 10px;
            text-decoration: none;
        }

        .btn-kembali:hover {
            background: #fff;
            color: #D32F2F;
        }
    </style>
</head>
<body>

<div class="lowongan-form">
    <h4>Edit Lowongan</h4>

    <form action="{{ route('lowongan.update', $lowongan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control"
                   value="{{ $lowongan->judul }}" required>
        </div>

        <div class="mb-3">
            <label>Posisi</label>
            <input type="text" name="posisi" class="form-control"
                   value="{{ $lowongan->posisi }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" rows="4"
                class="form-control" required>{{ $lowongan->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control"
                   value="{{ $lowongan->lokasi }}" required>
        </div>

        <div class="mb-4">
            <label>Icon URL</label>
            <input type="text" name="icon" class="form-control"
                   value="{{ $lowongan->icon }}">
        </div>

        <div class="text-center">
            <button class="btn-simpan">Update</button>
            <a href="{{ route('admin.lowongan') }}" class="btn-kembali">Batal</a>
        </div>
    </form>
</div>

</body>
</html>
