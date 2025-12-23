<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Admin</title>

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
            padding: 25px;
            max-width: 850px;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.lowongan') }}">Lowongan</a></li>
        <li><a href="{{ route('admin.pengumuman') }}">Pengumuman</a></li>
        <li><a href="{{ route('admin.manajemen') }}" class="active">Manajemen</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('admin.faq') }}">FAQ</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Log out</a></li>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <h4 class="mb-4">Edit Admin</h4>

    <div class="card-custom">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form action="{{ route('admin.manajemen.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text"
                           name="nama_lengkap"
                           class="form-control"
                           value="{{ $admin->profile->nama_lengkap ?? $admin->name }}"
                           required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ $admin->email }}"
                           required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Agama</label>
                    <input type="text"
                           name="agama"
                           class="form-control"
                           value="{{ $admin->profile->agama ?? '' }}">
                </div>

                <div class="col-md-6">
                    <label class="form-label">No. HP</label>
                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           value="{{ $admin->profile->no_hp ?? '' }}">
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">

                <div>
                    <!-- RESET PASSWORD -->
                    <a href="{{ route('admin.manajemen.reset.form', $admin->id) }}" class="btn btn-warning"> 
                        Reset Password 
                    </a>

                    <!-- HAPUS ADMIN -->
                    <button type="button"
                            class="btn btn-outline-danger"
                            data-bs-toggle="modal"
                            data-bs-target="#hapusAdminModal">
                        Hapus Admin
                    </button>
                </div>

                <div>
                    <a href="{{ route('admin.manajemen') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-danger px-4">
                        Simpan
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

<!-- MODAL HAPUS ADMIN -->
<div class="modal fade" id="hapusAdminModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4">

            <div class="modal-header border-0">
                <h5 class="modal-title">Hapus Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p style="color:black">
                    Yakin ingin menghapus admin ini?
                </p>
            </div>

            <div class="modal-footer border-0">
                <button class="btn btn-secondary" data-bs-dismiss="modal">
                    Batal
                </button>

                <form action="{{ route('admin.manajemen.destroy', $admin->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        Ya, Hapus
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>