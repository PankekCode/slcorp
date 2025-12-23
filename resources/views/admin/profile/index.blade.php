<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengumuman</title>

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
        }

        .sidebar ul li a.active,
        .sidebar ul li a:hover {
            background-color: #D32F2F;
            color: #fff;
        }

        .sidebarkontenbawah {
            margin-top: 250px;
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: 260px;
            padding: 30px;
        }

        /* CARD PENGUMUMAN */
        .announcement-card {
            display: flex;
            gap: 20px;
            background: linear-gradient(135deg, #D32F2F, #8E1E1E);
            border-radius: 18px;
            padding: 20px;
            margin-bottom: 20px;
            color: white;
            position: relative;
        }

        .announcement-content h6,
        .announcement-content p,
        .announcement-content span {
            color: white;
        }

        .announcement-content {
            flex: 1;
        }

        .announcement-actions {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn-edit,
        .btn-hapus {
            border: none;
            padding: 6px 16px;
            font-size: 12px;
            border-radius: 20px;
            cursor: pointer;
        }

        .btn-edit {
            background: #fff;
            color: #B71C1C;
        }

        .btn-hapus {
            background: #7F0000;
            color: #fff;
        }

        .btn-edit:hover {
            background: #f1f1f1;
        }

        .btn-hapus:hover {
            background: #5A0000;
        }

        /* FLOATING ADD */
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
                <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    Log out
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="container-fluid">
    <h4 class="mb-4">Profile</h4>

    <div class="row">
        <!-- FOTO -->
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <img src="{{ $admin->foto ? asset('storage/'.$admin->foto) : asset('assets/img/default.png') }}"
                     class="rounded-circle mx-auto mb-3"
                     width="140" height="140"
                     style="object-fit:cover">

                <h5 class="mb-0">{{ $profile->nama_lengkap }}</h5>
                <small class="text-muted">Admin</small>

                <form action="{{ route('admin.profile.photo') }}"
                      method="POST"
                      enctype="multipart/form-data"
                      class="mt-3">
                    @csrf
                    <input type="file" name="foto" class="form-control mb-2" required>
                    <button class="btn btn-outline-dark btn-sm">
                        Ubah Foto Profile
                    </button>
                </form>
            </div>
        </div>

        <!-- DATA -->
        <div class="col-md-8">
            <div class="card p-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{ $admin->name }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="text" class="form-control" value="{{ $admin->email }}" disabled>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" value="{{ $profile->no_hp }}" disabled>
                </div>

                <div class="mb-3">
                    <label>Address</label>
                    <textarea class="form-control" disabled>{{ $profile->alamat }}</textarea>
                </div>

                <a href="{{ route('admin.profile.edit') }}" class="btn btn-dark">
                    Edit Profile
                </a>
            </div>
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