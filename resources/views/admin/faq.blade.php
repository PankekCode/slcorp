<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

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
            font-weight: bold;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(211,47,47,.45);
            z-index: 999;
        }

        .floating-add:hover {
            transform: scale(1.08);
        }

        /* FAQ ACCORDION */
        .faq-card {
            background: #fff;
            border-radius: 18px;
            margin-bottom: 18px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
            overflow: hidden;
        }

        .faq-question {
            padding: 20px 26px;
            font-weight: 600;
            font-size: 15px;
            color: #B71C1C;
            cursor: pointer;
            position: relative;
        }

        .faq-question:hover {
            background: #fafafa;
        }

        .faq-question::after {
            content: "+";
            position: absolute;
            right: 25px;
            font-size: 22px;
            transition: .3s;
        }

        .faq-card.active .faq-question::after {
            content: "−";
        }

        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
            padding: 0 26px;
        }

        .faq-card.active .faq-content {
            max-height: 500px;
            padding-bottom: 20px;
        }

        .faq-answer {
            font-size: 14px;
            color: #444;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        /* ACTION BUTTON */
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-action {
            border: none;
            padding: 7px 16px;
            font-size: 12px;
            font-weight: 600;
            border-radius: 20px;
            cursor: pointer;
            transition: .25s;
            text-decoration: none;
            min-width: 70px;
        }

        .btn-edit {
            background: #B71C1C;
            color: #fff;
        }

        .btn-edit:hover {
            background: #8E1E1E;
            transform: translateY(-2px);
        }

        .btn-hapus {
            background: #7F0000;
            color: #fff;
        }

        .btn-hapus:hover {
            background: #5A0000;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .sidebar { display: none; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">SL INDONESIA</div>

    <ul>
        <li><a href="{{ route('dashboard-admin') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.lowongan') }}">Lowongan</a></li>
        <li><a href="{{ route('admin.pengumuman') }}">Pengumuman</a></li>
        <li><a href="{{ route('admin.manajemen') }}">Manajemen</a></li>
    </ul>

    <div class="sidebarkontenbawah">
        <ul>
            <li><a href="#" class="active">FAQ</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Log out</a></li>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>FAQ</h4>
        <a href="{{ route('admin.faq.create') }}" class="floating-add">+</a>
    </div>

    @forelse ($faqs as $faq)
        <div class="faq-card">
            <div class="faq-question">
                {{ $faq->pertanyaan }}
            </div>

            <div class="faq-content">
                <div class="faq-answer">
                    {{ $faq->jawaban }}
                </div>

                <div class="action-buttons">
                    <a href="{{ route('faq.edit', $faq->id) }}" class="btn-action btn-edit">
                        Edit
                    </a>

                    <form action="{{ route('admin.faq.destroy', $faq->id) }}"
                          method="POST"
                          onsubmit="return confirm('Yakin ingin menghapus FAQ ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn-action btn-hapus">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center text-muted mt-5">Belum ada FAQ.</p>
    @endforelse

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            question.parentElement.classList.toggle('active');
        });
    });
</script>

</body>
</html>
