<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
            padding: 20px;
            margin-bottom: 25px;
        }

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

        table td {
            padding: 6px 0;
            font-size: 14px;
        }

        .user-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.profile-photo {
    position: relative;
    width: 80px;
    height: 80px;
}

.profile-photo img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #e0e0e0;
}

/* icon kamera */
.camera-icon {
    position: absolute;
    bottom: 0;
    right: 0;
    background: #000;
    color: #fff;
    width: 26px;
    height: 26px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    cursor: pointer;
}

    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('user.datadiri') }}">Data Diri</a></li>
        <li><a href="{{ route('lowongan') }}">Lowongan</a></li>
        <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
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
    <h4 class="fw-semibold mb-4">Profile</h4>

    <div class="row">
        <!-- PROFILE CARD -->
      <div class="col-md-6">
        <div class="card-custom">
            <div class="user-info">

           <form action="{{ route('profile.photo') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <input type="file"
                name="photo"
                id="photoInput"
                hidden
                onchange="this.form.submit()">

                <!-- profile photo di sini -->
           

                <div class="profile-photo">
                    <img id="profileImage" 
                        src="{{ asset('images/profil.jpg') }}" 
                        alt="user">

                    <label for="photoInput" class="camera-icon">
                        <i class="bi bi-camera"></i>
                    </label>

                    <input type="file" 
                        id="photoInput" 
                        accept="image/*" 
                        hidden>
                </div>

             </form>

                <div>
                    <small>User</small>
                    <h5>{{ $user->name }}</h5>
                    <small>{{ $user->email }}</small>
                </div>

            </div>
        </div>
    </div>


        <!-- DETAIL INFO -->
        <div class="col-md-6">
            <div class="card-custom">
                <h6 class="fw-semibold mb-3">Informasi Akun</h6>

                <table>
                    <tr>
                        <td width="40%">Nama</td>
                        <td>: {{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: {{ $user->email }}</td>
                    </tr>

                    @if(optional($user)->profile)
                        <tr>
                            <td>No HP</td>
                            <td>: {{ $user->profile->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $user->profile->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>: {{ $user->profile->pendidikan }}</td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="2" class="text-muted">
                                Data diri belum diisi
                            </td>
                        </tr>
                    @endif
                </table>

                <div class="d-flex gap-2 mt-3">
                    <a href="{{ route('user.datadiri') }}" class="btn btn-danger btn-sm">
                        Lengkapi Data Diri
                    </a>

                    <a href="{{ route('password.edit') }}" class="btn btn-outline-secondary btn-sm">
                        Edit Password
                    </a>
            </div>

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
                Apakah kamu yakin ingin keluar dari akun?
            </div>
            <div class="modal-footer border-0">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="{{ route('welcome') }}" class="btn btn-danger">Ya, Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('photoInput').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function () {
        document.getElementById('profileImage').src = reader.result;
    };
    reader.readAsDataURL(file);
});
</script>

</body>
</html>
