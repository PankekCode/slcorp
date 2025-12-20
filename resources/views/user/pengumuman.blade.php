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

        .announcement-card {
            display: flex;
            gap: 20px;
            background: #D32F2F;
            border-radius: 15px;
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .announcement-box div {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px 15px;
            font-size: 14px;
        }

        .gambar {
            width: 120px;
            height: 120px;
            margin-top: auto;
            border: 0px solid red;
        }

        .announcement-content h6, p, span {
            color: white;
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

        .announcement-card {
        position: relative;
        z-index: 1;
        }

        .announcement-content a {
        position: relative;
        z-index: 10;
        }
        
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <!-- ICON BISA DITAMBAHKAN DI SINI -->
        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('user.datadiri') }}">Data Diri</a></li>
        <li><a href="{{ route('lowongan') }}">Lowongan</a></li>
        <li><a href="#" class="active">Pengumuman</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
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
<div class="main-content">

    <h4 class="fw-semibold mb-4">Pengumuman</h4>

    <!-- ITEM -->
    <div class="announcement-card">
        <div>
            <img class="gambar" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d" alt="pengumuman">
        </div>
        <div class="announcement-content">
            <h6>Pengumuman Lulus Seleksi Wawancara Seleksi Penerimaan Karyawan Divisi Marketing Penempatan Di Kantor Pusat PT SL Indonesia, Purwokerto Tahun 2025</h6>
            <div class="announcement-meta mb-1">
                <span>13/03/2025</span>
            </div>
            <p>Diberitahukan kepada peserta Seleksi Penerimaan Divisi Marketing Penempatan Di Kantor Pusat PT SL Indonesia, Purwokerto Tahun 2025, yang namanya tercantum di bawah ini dinyatakan lulus seleksi, selanjutnya...</p>
            <a href="/pengumuman-detail"
            class="btn btn-light btn-sm mt-2">
            Lihat Detail Pengumuman
            </a>
        </div>
    </div>

    <div class="announcement-card">
        <div>
            <img class="gambar" src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" alt="pengumuman">
        </div>
        <div class="announcement-content">
            <h6>Pengumuman Lulus Seleksi Wawancara Seleksi Penerimaan Karyawan Divisi Finance Penempatan Di Kantor Pusat PT SL Indonesia, Purwokerto Tahun 2025</h6>
            <div class="announcement-meta mb-1">
                <span>12/03/2025</span>
            </div>
            <p>Diberitahukan kepada peserta Seleksi Penerimaan Karyawan Divisi Finance Penempatan Di Kantor Pusat PT SL Indonesia, Purwokerto Tahun 2025, yang namanya tercantum di bawah ini dinyatakan lulus seleksi, selanjutnya...</p>
        </div>
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
                <p style="color: black">Apakah kamu yakin ingin keluar dari akun?</p>
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
