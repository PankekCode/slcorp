<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Diri</title>

    
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

        .card-header-red {
            background-color: #D32F2F;
            color: white;
            padding: 10px 15px;
            border-radius: 10px 10px 0 0;
            font-weight: 600;
            font-size: 16px;
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
        <li><a href="#" class="active">Data Diri</a></li>
        <li><a href="{{ route('lowongan') }}">Lowongan</a></li>
        <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="#">Profile</a></li>
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

    <h4 class="fw-semibold mb-4">Edit Data Diri</h4>

@if ($profile)
    <!-- CARD DATA DIRI -->
    <div class="card-custom">
        <div class="card-header-red">DATA DIRI ANDA</div>
        <div class="p-4">
            <p><strong>Nama Lengkap:</strong> {{ $profile->nama_lengkap }}</p>
            <p><strong>NIK:</strong> {{ $profile->nik }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>No HP:</strong> {{ $profile->no_hp }}</p>
            <p><strong>Tempat, Tgl Lahir:</strong>
                {{ $profile->tempat_lahir }}, {{ $profile->tanggal_lahir }}
            </p>
            <p><strong>Jenis Kelamin:</strong> {{ $profile->jenis_kelamin }}</p>
            <p><strong>Agama:</strong> {{ $profile->agama }}</p>
            <p><strong>Alamat:</strong> {{ $profile->alamat }}</p>
            <p><strong>Pendidikan:</strong> {{ $profile->pendidikan }}</p>

            <div class="d-flex gap-2 mt-3">
                <a href="{{ route('user.datadiri.edit') }}"
                   class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('user.datadiri.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data diri?')">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
@else

<form action="{{ route('user.datadiri.update') }}" method="POST">
    @csrf


    <!-- BIODATA -->
    <div class="card-custom">
        <div class="card-header-red">BIODATA</div>
        <div class="p-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" placeholder="NIK"
                    value="{{ old('nik', $profile->nik ?? '') }}">
                    
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $profile->nama_lengkap ?? '') }}">
                </div>
                <div class="col-md-3">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control"
                        value="{{ old('tempat_lahir', $profile->tempat_lahir ?? '') }}">
                </div>

                <div class="col-md-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control"
                        value="{{ old('tanggal_lahir', $profile->tanggal_lahir ?? '') }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>No. Handphone</label>
                    <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp', $profile->no_hp ?? '') }}">
                </div>
                <div class="col-md-3">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select">
                        <option value="">Jenis Kelamin</option>
                        <option value="Laki-laki" {{ ($profile->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>
                        <option value="Perempuan" {{ ($profile->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Agama</label>
                    <select name="agama" class="form-select">
                        <option>Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label>Alamat Domisili</label>
                    <textarea name="alamat" class="form-control" rows="3">
                        {{ old('alamat', $profile->alamat ?? '') }}
                    </textarea>
                </div>
            </div>
        </div>
    </div>

    <!-- RIWAYAT PENDIDIKAN -->
    <div class="card-custom">
        <div class="card-header-red">RIWAYAT PENDIDIKAN</div>
        <div class="p-4">
            <input type="text" name="pendidikan" class="form-control"
            value="{{ old('pendidikan', $profile->pendidikan ?? '') }}">   
        </div>

        
    </div>

    <div class="card-custom">
            <div class="card-header-red">DOKUMEN & FOTO</div>
            <div class="p-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Asal Sekolah / Institusi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Jenjang</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Jurusan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Tanggal Lulus</label>
                    <input type="date" class="form-control">
                </div>
            </div>
        <button type="submit" class="btn btn-danger mt-3">
        Update Data Diri
    </button>

    <a href="{{ route('user.datadiri') }}" class="btn btn-secondary mt-3 ms-2">
        Batal
    </a>
</form>
@endif

</div>

!-- MODAL LOGOUT -->
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