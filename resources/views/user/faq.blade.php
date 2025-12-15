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

        .faq-box {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 40px 32px;
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .faq-item {
            background-color: #d9d9d9;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 24px;
        }

        .faq-answer{
            display: none; /* ⬅️ INI YANG WAJIB */
            background-color: #ffffff;
            border-radius: 14px;
            padding: 18px 20px;
            margin-top: 14px;
            font-size: 15px;
            color: #333;
            line-height: 1.6;
            box-shadow: inset 0 0 0 1px #f0f0f0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            margin-bottom: 12px;
            border-bottom: 1px solid #eee;
        }


        .faq-wrapper.active .faq-answer {
            display: flex;
             max-height: 300px;
             border: 0px solid red;
             margin-top: -20px;
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
        <li><a href="{{ route('user.datadiri')}}">Data Diri</a></li>
        <li><a href="{{ route('lowongan') }}">Lowongan</a></li>
        <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="#" class="active">FAQ</a></li>
            <li><a href="#">Profile</a></li>
            <li>
        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
        Log out
         </a>
        </li>
        </ul>
    </div>
</div>

    <!-- Content -->
    <div class="flex-grow-1 content">
        <h4 class="mb-4">FAQ</h4>

        <div class="faq-box">

            <div class="faq-wrapper">
                <div class="faq-item">
                <span>Bagaimana cara melamar kerja di Sambel Layah Corporation?</span>
                <span>▼</span>
                </div>
                <div class="faq-answer">
                Pelamar dapat mengajukan lamaran kerja secara online melalui website resmi Sambel Layah Corporation dengan mengisi formulir pendaftaran dan mengunggah dokumen yang dibutuhkan. Sistem ini dibuat untuk memudahkan proses rekrutmen tanpa harus mengirim lamaran melalui WhatsApp.
                </div>
            </div>

            <div class="faq-wrapper">
                <div class="faq-item">
                <span>Posisi apa saja yang sedang dibuka?</span>
                <span>▼</span>
                </div>
                <div class="faq-answer">
                Lowongan kerja yang tersedia dapat dilihat pada halaman Lowongan Pekerjaan. Posisi dapat meliputi kru outlet, kasir, dapur, admin, hingga posisi pendukung lainnya, sesuai dengan kebutuhan masing-masing cabang.
                </div>
            </div>

            <div class="faq-wrapper">
                <div class="faq-item">
                <span>Dokumen apa saja yang diperlukan untuk melamar?</span>
                <span>▼</span>
                </div>
                <div class="faq-answer">
                Pelamar diwajibkan menyiapkan:
                Data diri lengkap
                Curriculum Vitae (CV)
                Surat lamaran (opsional)
                Dokumen pendukung lainnya (jika diperlukan)
                Seluruh dokumen dapat diunggah langsung melalui website.
                </div>
            </div>

             <div class="faq-wrapper">
                <div class="faq-item">
                <span>Apakah saya akan dihubungi setelah melamar?</span>
                <span>▼</span>
                </div>
                <div class="faq-answer">
                Pelamar yang memenuhi kualifikasi akan dihubungi oleh tim HR Sambel Layah Corporation melalui kontak yang telah didaftarkan. Proses seleksi dilakukan secara bertahap dan membutuhkan waktu tertentu.
                </div>
            </div>

             <div class="faq-wrapper">
                <div class="faq-item">
                <span>Apakah saya bisa melamar lebih dari satu posisi?</span>
                <span>▼</span>
                </div>
                <div class="faq-answer">
                Ya, pelamar diperbolehkan melamar lebih dari satu posisi, selama memenuhi kualifikasi yang dibutuhkan. Namun, disarankan untuk menyesuaikan lamaran dengan posisi yang paling sesuai dengan pengalaman dan kemampuan.
                </div>
            </div>

</div>

</div>

<script>
  document.querySelectorAll(".faq-item").forEach(item => {
    item.addEventListener("click", () => {
      const wrapper = item.parentElement;
      wrapper.classList.toggle("active");
    });
  });
</script>

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
