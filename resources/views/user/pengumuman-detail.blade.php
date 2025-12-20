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

        .announcement-card h5,
        .announcement-card p,
        .announcement-card small {
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

        .tab-btn {
            background-color: #fff !important;
            color: #333 !important;
            border: 1px solid #ddd;
            text-align: center;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show > .nav-link {
            background-color: #D32F2F !important;
            color: #fff !important;
            border-color: #D32F2F !important;
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

    <!-- HEADER -->
    <div class="announcement-card mb-4">
        <a href="{{ route('pengumuman') }}"
               style="
                    position:absolute;
                    top:15px;
                    left:15px;
                    width:32px;
                    height:32px;
                    border-radius:8px;
                    background:rgba(255,255,255,0.2);
                    color:#fff;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    text-decoration:none;
                    font-weight:bold;
               ">
                ←
            </a>
    
        <div>
            <ul>
                <h5><strong>Pengumuman Lulus Seleksi Wawancara PT SL Indonesia 2025</strong></h5>
                <p class="mb-1">
                    Kami mengucapkan <strong>terima kasih</strong> kepada seluruh peserta yang telah 
                    mengikuti proses seleksi di SL Corp. Berdasarkan hasil seleksi administrasi, 
                    kami mengundang peserta yang lolos seleksi untuk mengikuti tahap wawancara.
                </p>
                <small>Purwokerto, 13 Maret 2025</small>
            </ul>
        </div>
    </div>

    <div class="row">
        <!-- SIDEBAR KIRI -->
        <div class="col-md-4">
            <div class="nav flex-column nav-pills gap-2" role="tablist">
                <button class="nav-link tab-btn active"
                        data-bs-toggle="pill"
                        data-bs-target="#waktu"
                        type="button">
                    Waktu & Lokasi
                </button>

                <button class="nav-link tab-btn"
                        data-bs-toggle="pill"
                        data-bs-target="#ketentuan"
                        type="button">
                    Ketentuan
                </button>

                <button class="nav-link tab-btn"
                        data-bs-toggle="pill"
                        data-bs-target="#peserta"
                        type="button">
                    Daftar Peserta Lulus
                </button>
            </div>
        </div>

        <!-- KONTEN KANAN -->
        <div class="col-md-8">
            <div class="tab-content">

                <!-- TAB WAKTU -->
                <div class="tab-pane fade show active" id="waktu">
                    <div class="card-custom">
                        <h6>Informasi Pelaksanaan</h6>

                        <table class="table mt-3">
                            <tr>
                                <th>Tanggal</th>
                                <td>Kamis, 20 Maret 2025</td>
                            </tr>
                            <tr>
                                <th>Waktu</th>
                                <td>09.00 – Selesai</td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td>CV SL CORP, Jl. Suwatio No 13 B (Div. HRD)</td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td>
                                    Untuk peserta wawancara <strong>onsite</strong> wajib hadir dan
                                    membawa berkas sesuai persyaratan awal.
                                </td>
                            </tr>
                        </table>

                        <p>
                            Peserta yang dinyatakan lolos akan dihubungi melalui media resmi SL Corp.
                            Diharapkan hadir tepat waktu dan mempersiapkan diri dengan baik.
                        </p>

                        <p class="text-danger fw-semibold">
                            ⚠️ Catatan Penting: Seluruh proses seleksi di SL Corp tidak dipungut biaya
                            apa pun. Informasi resmi hanya disampaikan melalui kanal resmi SL Corp.
                        </p>

                        <p>
                            Hormat kami,<br>
                            Manajemen SL Corp
                        </p>
                    </div>
                </div>

                <!-- TAB KETENTUAN -->
                <div class="tab-pane fade" id="ketentuan">
                    <div class="card-custom">
                        <h5 class="mb-3">📌 Ketentuan dan Persyaratan Wawancara SL Corp</h5>    
                        <p>
                            Berikut adalah ketentuan dan persyaratan yang harus dipenuhi oleh peserta
                            yang akan mengikuti tahap wawancara seleksi penerimaan karyawan di SL Corp:
                        </p>
                        <h6>✅ Persyaratan yang Harus Dibawa</h6>
                        <ul>
                            <li>Curriculum Vitae (CV) terbaru</li>
                            <li>Surat Lamaran</li>
                            <li>Portofolio (jika ada)</li>
                            <li>Fotokopi / scan KTP</li>
                            <li>Fotokopi / scan ijazah terakhir</li>
                            <li>Alat tulis pribadi</li>
                            <li>Laptop (jika diperlukan)</li>
                        </ul>

                        <h6 class="mt-3">📋 Ketentuan Wawancara</h6>
                        <ul>
                            <li>Peserta wajib hadir sesuai jadwal</li>
                            <li>Menggunakan pakaian rapi dan sopan</li>
                            <li>Menjaga etika selama wawancara</li>
                        </ul>

                        <p class="text-danger fw-semibold">
                            ⚠️ Catatan Penting: Seluruh proses seleksi di SL Corp tidak dipungut biaya
                            apa pun. Informasi resmi hanya disampaikan melalui kanal resmi SL Corp.
                        </p>

                        <p>
                            Hormat kami,<br>
                            Manajemen SL Corp
                        </p>
                    </div>
                </div>

                <!-- TAB PESERTA -->
                <div class="tab-pane fade" id="peserta">
                    <div class="card-custom">
                        <h6>Daftar Peserta Lulus</h6>

                        <table class="table table-bordered mt-3">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Departemen</th>
                                <th>Waktu</th>
                            </tr>
                            <tr><td>1</td><td>Andi Pratama</td><td>Marketing</td><td>09.00 – 09.20</td></tr>
                            <tr><td>2</td><td>amang</td><td>Marketing</td><td>09.20 – 09.40</td></tr>
                            <tr><td>3</td><td>Budi Santoso</td><td>Marketing</td><td>09.40 – 10.00</td></tr>
                            <tr><td>4</td><td>Rina Oktaviani</td><td>Marketing</td><td>10.00 – 10.20</td></tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

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
