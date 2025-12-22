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

        /* tombol daftar (sesuai SS) */
        .btn-daftar-ss {
            background-color: #ffffff;
            color: #333;
            border: none;
            border-radius: 999px;
            padding: 6px 18px;
            font-size: 11px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            line-height: 1.2;
        }

        .btn-daftar-ss:hover {
            background-color: #f2f2f2;
            color: #111;
        }

        /* tombol di modal selesai */
        .btn-modal-finish {
            background-color: #D32F2F;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 8px 22px;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
        }

        .btn-modal-finish:hover {
            background-color: #b71c1c;
            color: #ffffff;
        }

        /* modal kecil */
        .modal-sl .modal-dialog { max-width: 320px; }
        .modal-sl .modal-content { border-radius: 10px; padding: 10px; }
        .modal-sl .modal-body { padding: 18px 16px; }
        .modal-sl .modal-text {
            font-size: 14px;
            font-weight: 500;
            color: #222;
            line-height: 1.35;
            margin-bottom: 16px;
        }
        .btn-sl {
            background-color: #D32F2F;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 6px 22px;
            font-size: 11px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
        }
        .btn-sl:hover { background-color: #b71c1c; color: #fff; }
        .btn-sl-outline {
            background-color: #E0E0E0;
            color: #333;
            border-radius: 6px;
            padding: 6px 22px;
            font-size: 11px;
            font-weight: 600;
            border: none;
            text-decoration: none;
            display: inline-block;
        }
        .btn-sl-outline:hover { background-color: #cfcfcf; }

    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('user.datadiri') }}">Data Diri</a></li>
        <li><a href="#" class="active">Lowongan</a></li>
        <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('faq')}}">FAQ</a></li>
            <li><a href="#">Profile</a></li>
            <li>
                <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Log out</a>
            </li>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <h5 class="fw-semibold mb-3">Lowongan</h5>

    <div class="card-custom">
        <div class="job-card flex-column align-items-start position-relative">

            <!-- TOMBOL BACK -->
            <a href="{{ route('lowongan') }}"
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

            <!-- HEADER -->
            <div class="job-left w-100 mb-3">
                <img class="icon1"
                     src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png"
                     alt="barista">

                <div class="text1">
                    <small class="fw-semibold">WE’RE HIRING — BARISTA</small><br>
                    <small>
                        Pembukaan Lowongan Kerja SL Corp<br>
                        Penempatan Outlet Purwokerto & Jogja
                    </small>

                    <p class="mt-2 mb-0" style="font-size:13px; max-width:900px;">
                        SL Corp membuka kesempatan bagi kamu yang bersemangat, ramah,
                        dan memiliki ketertarikan di dunia F&amp;B untuk bergabung sebagai Barista...
                    </p>
                </div>
            </div>

            <!-- ISI -->
            <div style="font-size:13px; line-height:1.6;">

                <p class="fw-semibold mb-1">Alasan Dibukanya Lowongan Barista</p>
                <p>
                    Pembukaan lowongan Barista dilakukan untuk memenuhi kebutuhan operasional Outlet SL Corp Purwokerto yang terus berkembang.
                    Dengan meningkatnya jumlah pelanggan, SL Corp membutuhkan Barista tambahan untuk menjaga kualitas minuman, kecepatan pelayanan,
                    serta kenyamanan pelanggan di outlet.
                    Penambahan Barista juga bertujuan agar operasional outlet berjalan lebih efektif, profesional, dan sesuai dengan standar pelayanan SL Corp.
                </p>

                <p class="fw-semibold mb-1">Tujuan Penempatan</p>
                <p>
                    Posisi Barista ini dibuka khusus untuk mengisi kebutuhan tenaga kerja di Outlet SL Corp Purwokerto guna mendukung aktivitas operasional harian
                    dan peningkatan kualitas layanan.
                </p>

                <p class="fw-semibold mb-1">Persyaratan Pendaftaran Barista</p>
                <ol>
                    <li>Pendidikan minimal SMA/SMK sederajat</li>
                    <li>Pria / Wanita</li>
                    <li>Usia maksimal 25 tahun</li>
                    <li>Sehat jasmani dan rohani</li>
                    <li>Rajin beribadah, berperilaku baik, dan berakhlak sopan</li>
                    <li>Jujur, disiplin, dan bertanggung jawab</li>
                    <li>Mampu bekerja secara tim maupun individu</li>
                    <li>Berpenampilan rapi dan bersih</li>
                    <li>Bersedia bekerja dengan sistem shift</li>
                    <li>Memiliki pengalaman di bidang F&amp;B menjadi nilai tambah (tidak wajib)</li>
                </ol>

            </div>

            <!-- TOMBOL DAFTAR -->
            <div class="w-100 d-flex justify-content-center mt-3">
                <a href="#"
                   class="btn-daftar-ss"
                   data-bs-toggle="modal"
                   data-bs-target="#modalYakin">
                    DAFTAR SEKARANG
                </a>
            </div>

        </div>
    </div>

</div>

<!-- ================= MODAL ================= -->

<!-- MODAL 1 -->
<div class="modal fade modal-sl" id="modalYakin" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <p class="modal-text">
          Apakah Anda Yakin Ingin<br>Mendaftar di Divisi ini?
        </p>
        <div class="d-flex justify-content-center gap-2">
          <button class="btn-sl-outline" data-bs-dismiss="modal">TIDAK</button>
          <button class="btn-sl"
                  data-bs-dismiss="modal"
                  data-bs-toggle="modal"
                  data-bs-target="#modalData">
            YA
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL 2 -->
<div class="modal fade modal-sl" id="modalData" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <p class="modal-text">
          Apakah Data Diri Anda Sudah<br>Lengkap?
        </p>
        <div class="d-flex justify-content-center gap-2">
          <a href="{{ route('user.datadiri') }}" class="btn-sl-outline">BELUM</a>
          <button class="btn-sl"
                  data-bs-dismiss="modal"
                  data-bs-toggle="modal"
                  data-bs-target="#modalSiap">
            SUDAH
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL 3 -->
<div class="modal fade modal-sl" id="modalSiap" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <p class="modal-text">
          Apakah Anda Siap Mengikuti<br>Seluruh Tahapan Seleksi?
        </p>
        <div class="d-flex justify-content-center gap-2">
          <button class="btn-sl-outline" data-bs-dismiss="modal">TIDAK</button>
          <button class="btn-sl"
                  data-bs-dismiss="modal"
                  data-bs-toggle="modal"
                  data-bs-target="#modalSerahkan">
            YA
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL 4 -->
<div class="modal fade modal-sl" id="modalSerahkan" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <p class="modal-text">Serahkan Lamaran Ke HRD</p>
        <div class="d-flex justify-content-center gap-2">
          <button class="btn-sl-outline" data-bs-dismiss="modal">TIDAK</button>
          <button class="btn-sl"
                  data-bs-dismiss="modal"
                  data-bs-toggle="modal"
                  data-bs-target="#modalSelesai">
            YA
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL 5 -->
<div class="modal fade modal-sl" id="modalSelesai" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">

        <p class="modal-text">
          Berkas Sudah Diserahkan<br>
          Ke HRD
        </p>

        <a href="{{ route('lowongan') }}"
           class="btn-modal-finish">
           KEMBALI KE HALAMAN LOWONGAN
        </a>

      </div>
    </div>
  </div>
</div>

<!-- LOGOUT MODAL -->
<div class="modal fade" id="logoutModal" tabindex="-1">
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
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="{{ route('welcome') }}" class="btn btn-danger">Ya, Logout</a>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>