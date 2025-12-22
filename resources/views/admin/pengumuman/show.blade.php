<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Pengumuman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #E5E5E5;
            font-family: 'Poppins', sans-serif;
        }

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
        }

        .sidebar ul li a.active,
        .sidebar ul li a:hover {
            background-color: #D32F2F;
            color: #fff;
        }

        .sidebarkontenbawah {
            margin-top: 250px;
        }

        .main-content {
            margin-left: 260px;
            padding: 30px;
        }

        .card-custom {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
        }

        .announcement-card {
            position: relative;
            background: linear-gradient(90deg, #D32F2F, #8E1E1E);
            border-radius: 18px;
            padding: 30px;
            color: white;
            margin-bottom: 25px;
        }

        .tab-btn {
            background: #fff !important;
            border: 1px solid #ddd;
        }

        .nav-pills .nav-link.active {
            background: #D32F2F !important;
            color: white !important;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <li><a href="{{ route('dashboard-admin') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.lowongan') }}">Lowongan</a></li>
        <li><a href="{{ route('admin.pengumuman') }}" class="active">Pengumuman</a></li>
        <li><a href="{{ route('admin.manajemen') }}">Manajemen</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('admin.faq') }}">FAQ</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </div>
</div>

<!-- MAIN -->
<div class="main-content">

    <!-- HEADER -->
    <div class="announcement-card">

        <a href="{{ route('admin.pengumuman') }}"
           style="position:absolute;top:20px;left:20px;
           width:32px;height:32px;border-radius:8px;
           background:rgba(255,255,255,0.2);
           display:flex;align-items:center;justify-content:center;
           color:#fff;text-decoration:none;">←</a>

        <div style="position:absolute;top:20px;right:20px;display:flex;gap:10px;">
            <a href="{{ route('admin.pengumuman.edit', $pengumuman->id) }}"
               class="btn btn-light btn-sm rounded-pill">Edit</a>

            <form action="{{ route('admin.pengumuman.destroy', $pengumuman->id) }}"
                  method="POST" onsubmit="return confirm('Yakin hapus?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-light btn-sm rounded-pill">Hapus</button>
            </form>
        </div>

        <h5 class="fw-bold mt-4">{{ $pengumuman->judul }}</h5>
        <p class="mb-1">{{ $pengumuman->deskripsi }}</p>
        <small>{{ $pengumuman->lokasi }}, {{ $pengumuman->tanggal }}</small>
    </div>

    <div class="row">
        <!-- TAB -->
        <div class="col-md-4">
            <div class="nav flex-column nav-pills gap-2">
                <button class="nav-link tab-btn active" data-bs-toggle="pill" data-bs-target="#waktu">Waktu & Lokasi</button>
                <button class="nav-link tab-btn" data-bs-toggle="pill" data-bs-target="#ketentuan">Ketentuan</button>
                <button class="nav-link tab-btn" data-bs-toggle="pill" data-bs-target="#peserta">Peserta</button>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="col-md-8">
            <div class="tab-content">

                <!-- WAKTU & LOKASI -->
                <div class="tab-pane fade show active" id="waktu">
                    <div class="card-custom">
                        <h6 class="fw-semibold">Waktu</h6>
                        <p>{{ $pengumuman->tanggal }}</p>

                        <h6 class="fw-semibold mt-3">Lokasi</h6>
                        <p>{{ $pengumuman->lokasi }}</p>
                    </div>
                </div>

                <!-- KETENTUAN -->
                <div class="tab-pane fade" id="ketentuan">
                    <div class="card-custom">
                        {!! nl2br(e($pengumuman->ketentuan)) !!}
                    </div>
                </div>

                <!-- PESERTA -->
                <div class="tab-pane fade" id="peserta">
                    <div class="card-custom">
                        {!! nl2br(e($pengumuman->peserta)) !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
