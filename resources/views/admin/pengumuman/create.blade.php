<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengumuman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #E5E5E5;
            font-family: 'Poppins', sans-serif;
        }

        .pengumuman-container {
            max-width: 760px;
            margin: 90px auto;
            background: linear-gradient(135deg, #D32F2F, #8E1E1E);
            padding: 40px 45px;
            border-radius: 22px;
            box-shadow: 0 18px 40px rgba(0,0,0,.28);
            color: #fff;
        }

        .pengumuman-container h3 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 35px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }

        .form-control {
            width: 100%;
            border-radius: 14px;
            border: none;
            padding: 13px 16px;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255,255,255,.35);
        }

        textarea {
            resize: none;
        }

        .form-actions {
            text-align: center;
            margin-top: 35px;
        }

        .btn-submit {
            background: #fff;
            color: #D32F2F;
            font-weight: 600;
            padding: 11px 34px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
        }

        .btn-cancel {
            margin-left: 12px;
            padding: 11px 34px;
            border-radius: 30px;
            border: 2px solid #fff;
            color: #fff;
            text-decoration: none;
        }

        .btn-cancel:hover {
            background: #fff;
            color: #D32F2F;
        }
    </style>
</head>
<body>

<div class="pengumuman-container">
    <h3>Tambah Pengumuman</h3>

    <form action="{{ route('admin.pengumuman.store') }}" method="POST">
        @csrf

        <!-- JUDUL -->
        <div class="form-group">
            <label>Judul Pengumuman</label>
            <input type="text"
                   name="judul"
                   class="form-control"
                   placeholder="Masukkan judul pengumuman"
                   required>
        </div>

        <!-- TANGGAL -->
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date"
                   name="tanggal"
                   class="form-control"
                   required>
        </div>

        <!-- RINGKASAN -->
        <div class="form-group">
            <label>Ringkasan</label>
            <textarea name="ringkasan"
                      rows="3"
                      class="form-control"
                      placeholder="Ringkasan singkat pengumuman"
                      required></textarea>
        </div>

        <!-- ISI -->
        <div class="form-group">
            <label>Isi Lengkap Pengumuman</label>
            <textarea name="isi"
                      rows="6"
                      class="form-control"
                      placeholder="Isi lengkap pengumuman"
                      required></textarea>
        </div>

        <!-- ACTION -->
        <div class="form-actions">
            <button type="submit" class="btn-submit">
                Simpan
            </button>

            <a href="{{ route('admin.pengumuman') }}"
               class="btn-cancel">
                Batal
            </a>
        </div>
    </form>
</div>

</body>
</html>
