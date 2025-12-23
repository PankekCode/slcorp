<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Profile</title>

    <!-- Bootstrap & Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #E5E5E5;
            font-family: 'Poppins', sans-serif;
        }

        /* ================= SIDEBAR ================= */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: #fff;
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

        /* ================= MAIN CONTENT ================= */
        .main-content {
            margin-left: 260px;
            padding: 30px;
        }

        /* ================= PROFILE ================= */
        .admin-profile-photo-card,
        .admin-profile-data-card {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 6px 18px rgba(0,0,0,.06);
        }

        .admin-profile-avatar {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #f1f1f1;
            margin-bottom: 12px;
        }

        .admin-profile-name {
            font-size: 16px;
            font-weight: 600;
        }

        .admin-profile-role {
            font-size: 13px;
            color: #777;
        }

        .admin-profile-photo-btn,
        .admin-profile-edit-btn {
            border-radius: 20px;
            font-size: 14px;
            padding: 8px 24px;
        }

        .admin-profile-data-card label {
            font-size: 13px;
            font-weight: 500;
            color: #555;
        }

        .admin-profile-data-card .form-control {
            font-size: 14px;
            background: #f9f9f9;
            border-radius: 10px;
        }

        .admin-profile-data-card .form-control:disabled {
            color: #333;
            opacity: 1;
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
        <li><a href="{{ route('admin.manajemen') }}">Manajemen</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('admin.faq') }}">FAQ</a></li>
            <li><a href="#" class="active">Profile</a></li>
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
    <h4 class="mb-4">Profile</h4>

    <div class="row g-4">
        <!-- FOTO -->
        <div class="col-md-4">
            <div class="admin-profile-photo-card text-center">
                <img
                    src="{{ $admin->foto ? asset('storage/'.$admin->foto) : asset('assets/img/default.png') }}"
                    class="admin-profile-avatar"
                    alt="Foto Profile">

                <div class="admin-profile-name">{{ $profile->nama_lengkap }}</div>
                <div class="admin-profile-role">Admin</div>

                <form action="{{ route('admin.profile.photo') }}"
                      method="POST"
                      enctype="multipart/form-data"
                      class="mt-3">
                    @csrf
                    <input type="file" name="foto" class="form-control mb-2" required>
                    <button class="btn btn-outline-dark btn-sm admin-profile-photo-btn w-100">
                        Ubah Foto Profile
                    </button>
                </form>
            </div>
        </div>

        <!-- DATA -->
        <div class="col-md-8">
            <div class="admin-profile-data-card">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{ $admin->name }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label>Email Address</label>
                        <input type="text" class="form-control" value="{{ $admin->email }}" disabled>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" value="{{ $profile->no_hp }}" disabled>
                </div>

                <div class="mb-3">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" disabled>{{ $profile->alamat }}</textarea>
                </div>

                <a href="{{ route('admin.profile.edit') }}"
                   class="btn btn-dark admin-profile-edit-btn">
                    Edit Profile
                </a>
            </div>
        </div>
    </div>
</div>

<!-- MODAL LOGOUT -->
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
