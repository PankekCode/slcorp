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
            margin-left: 18%;
            margin-bottom: 20px;
            margin-right: 2%;
            margin-top: 2%;
        }

        .job-card .job-info {
            max-width: 75%;
        }

        .job-card .btn {
            background: #E5E5E5;
            border-radius: 20px;
            font-size: 13px;
        }

        .job-info {
            display: flex;
            align-items: center;      /* 🔥 INI KUNCI: sejajar vertikal */
            gap: 16px;                /* jarak icon & teks */
}

        .job-icon {
            margin-right: 15px;
            border: 2px solid red;
            padding-right: 90%;
        }

        .icon1 {
            width: 80px;
            height: 80px;
            object-fit: contain;
            flex-shrink: 0;    
            
        }

        .text1 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: 0px solid white;
            margin-right: -1000px;
        }

        .job-left {
            border: 0px solid red;
        }

    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <!-- ICON BISA DITAMBAHKAN DI SINI (contoh: <i class="bi bi-house"></i>) -->
        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('user.datadiri') }}">Data Diri</a></li>
        <li><a href="#" class="active">Lowongan</a></li>
        <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('faq')}}">FAQ</a></li>
            <li><a href="{{ route('user.profile') }}">Profile</a></li>
            <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
            Log out
            </a>
        </li>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="card-wrapper">

    @forelse ($lowongans as $lowongan)
        <div class="job-card">
            <div class="job-left">
                <div class="job-info">

                    {{-- ICON --}}
                    <img class="icon1"
                         src="{{ $lowongan->icon ?? 'https://cdn-icons-png.flaticon.com/512/1046/1046784.png' }}"
                         alt="{{ $lowongan->posisi }}">

                    <div class="text1">
                        <h6>WE'RE HIRING – {{ strtoupper($lowongan->posisi) }}</h6>
                        <p>Pembukaan Lowongan Kerja SL Corp</p>

                        {{-- BATASI DESKRIPSI --}}
                        <small>
                            {{ \Illuminate\Support\Str::limit($lowongan->deskripsi, 120) }}
                        </small>
                    </div>

                </div>
            </div>

            <a href="{{ route('user.lowongan.detail', $lowongan->id) }}">
                <button class="btn-more">SEE MORE</button>
            </a>
        </div>
    @empty
        <p>Belum ada lowongan tersedia.</p>
    @endforelse

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