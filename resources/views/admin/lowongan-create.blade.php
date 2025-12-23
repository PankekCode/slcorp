<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Lowongan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #E5E5E5;
            font-family: 'Poppins', sans-serif;
        }

        /* CARD FORM */
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

        /* LABEL */
        .lowongan-form label {
            font-weight: 600;
            margin-bottom: 6px;
        }

        /* INPUT */
        .lowongan-form .form-control {
            border-radius: 12px;
            border: none;
            padding: 12px 15px;
            font-size: 14px;
        }

        .lowongan-form .form-control:focus {
            box-shadow: 0 0 0 3px rgba(255,255,255,0.35);
        }

        /* BUTTON */
        .btn-simpan {
            background: #fff;
            color: #D32F2F;
            font-weight: 600;
            border-radius: 25px;
            padding: 10px 26px;
            border: none;
            transition: 0.3s;
        }

        .btn-simpan:hover {
            background: #f2f2f2;
            transform: scale(1.05);
        }

        .btn-kembali {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
            font-weight: 600;
            border-radius: 25px;
            padding: 10px 26px;
            margin-left: 10px;
            transition: 0.3s;
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
    <h4>Tambah Lowongan</h4>

    <form action="{{ route('admin.lowongan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Judul Lowongan</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Posisi</label>
            <input type="text" name="posisi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>

        <div class="mb-4">
            <label>Icon URL (opsional)</label>
            <input type="text" name="icon" class="form-control"
                   placeholder="https://cdn-icons-png.flaticon.com/...">
        </div>

        <div class="text-center">
            <button type="submit" class="btn-simpan">Simpan</button>
            <a href="{{ route('admin.lowongan') }}" class="btn-kembali">Kembali</a>
        </div>
    </form>
</div>

</body>
</html>