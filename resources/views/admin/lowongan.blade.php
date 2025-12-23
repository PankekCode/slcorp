@php
use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lowongan</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #E5E5E5;
            font-family: 'Poppins', sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: #FFFFFF;
            position: fixed;
            left: 0;
            top: 0;
            padding: 25px 20px;
        }

        .sidebar .logo {
            font-weight: 700;
            font-size: 22px;
            margin-bottom: 40px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 12px;
        }

        .sidebar ul li a {
            display: block;
            padding: 10px 15px;
            border-radius: 8px;
            color: #333;
            text-decoration: none;
            font-size: 14px;
            border: 0px solid red;
        }

        .sidebar ul li a.active,
        .sidebar ul li a:hover {
            background-color: #D32F2F;
            color: #fff;
        }

        .sidebarkontenbawah {
            margin-top: 250px;
            border: 0px solid red;
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: 260px;
            padding: 30px;
        }

        .card-custom {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
        }

        /* USER INFO */
        .user-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* ANNOUNCEMENT */
        .announcement-box {
            display: flex;
            gap: 20px;
        }

        .announcement-box div {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px 15px;
            font-size: 14px;
        }

        /* JOB CARD */
        .job-card {
            background: linear-gradient(90deg, #D32F2F, #8E1E1E);
            color: #fff;
            border-radius: 18px;
            padding: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .job-card .job-info {
            max-width: 75%;
        }

        .job-card .btn {
            background: #E5E5E5;
            border-radius: 20px;
            font-size: 13px;
        }

        .job-icon {
            margin-right: 15px;
            border: 2px solid red;
            padding-right: 90%;
        }

        .icon1 {
            display: block;
            width: 100px;
            height: 100px;
            border: 0px solid red;
            margin-top: 20px;
        }

        .text1 {
            margin-left: 130px;
            margin-top: -105px;
            border: 0px solid red;
        }

        .job-left {
            border: 0px solid red;
        }

        /* FLOATING ADD BUTTON - MERAH */
        .floating-add {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #D32F2F, #8E1E1E);
            color: #fff;
            font-size: 36px;
            font-weight: bold;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(211, 47, 47, 0.45);
            z-index: 9999;
            transition: all 0.2s ease-in-out;
        }

        .floating-add:hover {
            transform: scale(1.08);
            background: linear-gradient(135deg, #b71c1c, #7f1414);
            color: #fff;
        }

            /* Wrapper tombol edit & hapus */
        .action-buttons {
            display: flex;
            align-items: center;
            gap: 10px; /* JARAK ANTAR TOMBOL */
        }

        /* Reset form agar tidak turun ke bawah */
        .action-buttons form {
            margin: 0;
        }

        /* Tombol umum */
        .btn-action {
            border: none;
            padding: 7px 16px;
            font-size: 12px;
            font-weight: 600;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.25s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 70px;
        }

        /* EDIT */
        .btn-edit {
            background: #B71C1C;
            color: #fff;
        }

        .btn-edit:hover {
            background: #8E1E1E;
            transform: translateY(-2px);
        }

        /* HAPUS */
        .btn-hapus {
            background: #7F0000;
            color: #fff;
        }

        .btn-hapus:hover {
            background: #5A0000;
            transform: translateY(-2px);
        }

    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <!-- ICON BISA DITAMBAHKAN DI SINI (contoh: <i class="bi bi-house"></i>) -->
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="#" class="active">Lowongan</a></li>
        <li><a href="{{ route('admin.pengumuman') }}">Pengumuman</a></li>
        <li><a href="{{ route('admin.manajemen') }}">Manajemen</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('admin.faq') }}">FAQ</a></li>
            <li>
            <a href="{{ route('admin.profile.index') }}" class="nav-link">
                    <i class="bi bi-person"></i>
                    Profile
                </a>
            <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
            Log out
            </a>
        </li>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <h4 class="fw-semibold mb-4">Lowongan</h4>

   <div class="card-wrapper">

            <!-- JOB ITEM -->
@if ($lowongans->count())
    @foreach ($lowongans as $item)
        <div class="job-card">
            <div class="job-left">
                <div class="job-info">
                    <img class="icon1"
                         src="{{ $item->icon ?? 'https://cdn-icons-png.flaticon.com/512/1046/1046784.png' }}">

                    <div class="text1">
                        <h6>{{ $item->judul }}</h6>
                        <p>{{ $item->posisi }}</p>
                        <small>{{ Str::limit($item->deskripsi, 120) }}</small>
                    </div>
                </div>
            </div>

            <a href="{{ route('admin.lowongan.create') }}" class="floating-add">
                <span style="margin-top:-4px">+</span>
            </a>

            <div class="action-buttons">
                <a href="{{ route('lowongan.edit', $item->id) }}"
                class="btn-action btn-edit">
                    EDIT
                </a>

                <form action="{{ route('admin.lowongan.destroy', $item->id) }}"
                    method="POST"
                    onsubmit="return confirm('⚠️ Yakin ingin menghapus lowongan ini? Data tidak bisa dikembalikan!')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-action btn-hapus">
                        HAPUS
                    </button>
                </form>
            </div>

        </div>
    @endforeach
@else
    <p class="text-muted">Belum ada lowongan.</p>
    <a href="{{ route('admin.lowongan.create') }}" class="floating-add">
         <span style="margin-top:-4px">+</span>
    </a>
@endif


</div>


</div>

<!-- MODAL LOGOUT -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4">
            <div class="modal-header border-0">
                <h5 class="modal-title">Konfirmasi Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Apakah kamu yakin ingin keluar dari akun?</p>
            </div>

            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Batal
                </button>

                <!-- TOMBOL LOGOUT -->
                <a href="{{ route('welcome') }}" class="btn btn-danger">
                    Ya, Logout
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
<!DOCTYPE html>