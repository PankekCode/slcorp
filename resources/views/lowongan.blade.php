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

    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <!-- ICON BISA DITAMBAHKAN DI SINI (contoh: <i class="bi bi-house"></i>) -->
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('datadiri') }}">Data Diri</a></li>
        <li><a href="#" class="active">Lowongan</a></li>
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

    <h4 class="fw-semibold mb-4">Lowongan</h4>

    <div class="card-wrapper">

        <!-- JOB ITEM -->
        <div class="job-card">
            <div class="job-left">
                <div class="job-info">
                    <img class="icon1" src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="barista" >
                    <div class="text1">
                    <h6>WE'RE HIRING – BARISTA</h6>
                    <p>Pembukaan Lowongan Kerja SL Corp</p>
                    <small>SL Corp membuka kesempatan bagi kamu yang bersemangat, ramah, dan memiliki ketertarikan di dunia F&B untuk bergabung sebagai Barista...</small>
                    </div>
                </div>
            </div>
            <button class="btn-more">SEE MORE</button>
        </div>

        <div class="job-card">
            <div class="job-left">
                <div class="job-info">
                <img class="icon1" src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" alt="chef" height="100px">
                <div class="text1">
                    <h6>WE'RE HIRING – CHEF</h6>
                    <p>Pembukaan Lowongan Kerja SL Corp</p>
                    <small>SL Corp membuka lowongan untuk posisi Chef bagi individu yang memiliki passion di bidang kuliner...</small>
                </div>
                </div>
            </div>
            <button class="btn-more">SEE MORE</button>
        </div>

        <div class="job-card">
            <div class="job-left">
                <div class="job-info">
                    <img class="icon1" src="https://cdn-icons-png.flaticon.com/512/1077/1077976.png" alt="gudang" height="100px">
                    <div class="text1">
                    <h6>WE'RE HIRING – HELPER GUDANG</h6>
                    <p>Pembukaan Lowongan Kerja SL Corp</p>
                    <small>SL Corp membuka lowongan untuk posisi Helper Gudang yang akan ditempatkan di Gudang SL Corp Purwokerto...</small>
                    </div>
                </div>
            </div>
            <button class="btn-more">SEE MORE</button>
        </div>

        <div class="job-card">
            <div class="job-left">
                <div class="job-info">
                    <img class="icon1" src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" alt="keuangan" height="100px">
                    <div class="text1">
                    <h6>WE'RE HIRING – KEUANGAN</h6>
                    <p>Pembukaan Lowongan Kerja SL Corp</p>
                    <small>SL Corp membuka lowongan untuk posisi Keuangan yang akan ditempatkan di SL Corp Purwokerto...</small>
                    </div>
                </div>
            </div>
            <button class="btn-more">SEE MORE</button>
        </div>

    </div>

</div>

</body>
</html>
<!DOCTYPE html>