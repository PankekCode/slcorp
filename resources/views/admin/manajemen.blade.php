<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen</title>

    
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
        
        .floating-add {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #D32F2F, #8E1E1E);
        color: #fff;
        font-size: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 8px 20px rgba(211, 47, 47, 0.45);
        z-index: 999;
        }

        .floating-add:hover {
            transform: scale(1.05);
            color: #fff;
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
        <li><a href="{{ route('admin.lowongan') }}">Lowongan</a></li>
        <li><a href="{{ route('admin.pengumuman') }}">Pengumuman</a></li>
        <li><a href="{{ route('admin.manajemen') }}" class="active">Manajemen</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('admin.faq') }}">FAQ</a></li>
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

    <h4 class="mb-4">Management</h4>

    <div class="card-custom">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Agama</th>
                        <th>Tanggal dibuat</th>
                        <th>Status</th>
                        <th class="text-center">Ket.</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($admins as $admin)
                        <tr>
                            <td>{{ $admin->profile->nama_lengkap ?? $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->profile->agama ?? '-' }}</td>
                            <td>{{ optional($admin->created_at)->format('d-m-Y') }}</td>

                            {{-- karena kolom status belum ada di DB, sementara default AKTIF --}}
                            <td>
                                <span class="badge rounded-pill text-bg-success">AKTIF</span>
                            </td>

                            <td class="text-center">
                                <a href="{{ route('admin.manajemen.edit', $admin->id) }}" class="btn btn-sm btn-light">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">
                                Belum ada data admin.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

<!-- MODAL TAMBAH ADMIN -->
<div class="modal fade" id="tambahAdminModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4">

            <div class="modal-header border-0">
                <h5 class="modal-title fw-semibold">Tambah Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('admin.manajemen.store') }}" method="POST">
                @csrf

                <div class="modal-body">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text"
                                   name="nama_lengkap"
                                   class="form-control"
                                   placeholder="Masukkan nama lengkap"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="admin@email.com"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Agama</label>
                            <input type="text"
                                   name="agama"
                                   class="form-control"
                                   placeholder="Contoh: Islam">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">No. HP</label>
                            <input type="text"
                                   name="no_hp"
                                   class="form-control"
                                   placeholder="08xxxxxxxxxx">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control"
                                   required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer border-0">
                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Batal
                    </button>

                    <button type="submit"
                            class="btn btn-danger px-4">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

    <a href="#" class="floating-add" data-bs-toggle="modal" data-bs-target="#tambahAdminModal" title="Tambah Admin"> + </a>

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