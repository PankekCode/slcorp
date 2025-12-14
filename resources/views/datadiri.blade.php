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

    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <!-- ICON BISA DITAMBAHKAN DI SINI (contoh: <i class="bi bi-house"></i>) -->
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="#" class="active">Data Diri</a></li>
        <li><a href="{{ route('lowongan') }}">Lowongan</a></li>
        <li><a href="#">Pengumuman</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="{{ route('welcome') }}">Log out</a></li>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <h4 class="fw-semibold mb-4">Data Diri</h4>

    <!-- BIODATA -->
    <div class="card-custom">
        <div class="card-header-red">BIODATA</div>
        <div class="p-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>NIK</label>
                    <input type="text" class="form-control" placeholder="NIK">
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="col-md-3">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Tempat Lahir">
                </div>
                <div class="col-md-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>No. Handphone</label>
                    <input type="text" class="form-control" placeholder="08xxxxxxxx">
                </div>
                <div class="col-md-3">
                    <label>Jenis Kelamin</label>
                    <select class="form-select">
                        <option>Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Agama</label>
                    <select class="form-select">
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
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>

    <!-- RIWAYAT PENDIDIKAN -->
    <div class="card-custom">
        <div class="card-header-red">RIWAYAT PENDIDIKAN</div>
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

</div>

</body>
</html>