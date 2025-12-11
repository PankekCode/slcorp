<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLCorp</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }
        header {
            background: transparent;
            position: fixed;          
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            transition: all 0.3s ease;
            box-shadow: none;
            padding-bottom: 30px;
        }
        header.scrolled {
            background: rgba(15, 15, 15, 0.8);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1.5%;
            padding-left: 80px;
            padding-right: 80px;
            max-width: 1920px;
            margin: 0 auto;
        }
        .hero {
            background-image: url('{{ asset("images/hero-bg.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            padding: 220px 0;
            text-align: left;
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .container {
            max-width: 1920px;
            margin: 0 auto;
            padding: 80px;
            position: relative;
            z-index: 2;
        }

        .containercard {
            max-width: 1920px;
            margin-top: 3%;
            margin-left: -1%;
            margin-right: -1%;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url('{{ asset("images/hero-bg.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            filter: blur(5px);
            transform: scale(1.06);
            transform-origin: center;
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: darken;
            z-index: 1;
            will-change: transform;
        }

        .hero > * {
            position: relative;
            z-index: 2;
        }

        .herotext {
            margin-top: -30px;
            padding-right: 65%;

        }

        .herotext h1 {
            font-size: 48px;
            padding-bottom: 8px;
            font-weight: bold;
        }

        .herotext p {
            font-size: 18px;
            padding-bottom: 24px;
            font-weight: lighter;
        }

        .hero-blur {
            position: absolute;
            inset: 0;
            backdrop-filter: blur(20px);
            background: rgba(0, 0, 0, 0.7);
        }
        
        .cta-button-atas {
            background: #D32F2F;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .brand {
            color: #D32F2F;
            font-weight: 700;
        }
        .tentangkami {
            padding: 80px 5%;
            background: #f4f4f4;
        }
        .stats {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 150px;
            margin: 30px 0 40px;
        }
        .stat {
            text-align: center;
        }
        .statangka {
            color: #D32F2F;
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 8px;
        }
        .stat-label {
            margin-top: -24px;
            font-size: 28px;
            color: #000;
            text-transform: none;
            text-align: center;
        }
        @media (max-width: 768px) {
            .stats { flex-direction: column; gap: 18px; }
            .statangka { font-size: 36px; }
        }
        .card {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            max-width: 1920px;
            margin: 0 auto;

        }

        .judulcard1 {
            font-size: 48px;
            font-weight: 600;
            color: #D32F2F;
            letter-spacing: 1px;
            padding-right: 27%;
        }

        .judulcard2 {
            font-size: 48px;
            font-weight: 600;
            color: #D32F2F;
            letter-spacing: 1px;
        }

        .judulcard3 {
            font-size: 48px;
            font-weight: 600;
            color: #D32F2F;
            letter-spacing: 1px;
            padding-left: 28%;
        }
        
        .judulcardjudul {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            max-width: 1920px;
            margin: 24px auto 0;
            padding: 0 80px;
            text-align: center;
        }

        .cardnya {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .cardnya p {
            padding-top: 40px;
            margin-bottom: 8px;
            text-align: center;
        }

        .gambarcard {
            display: flex;
            justify-content: center;
            align-items: center;
        }


        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 30px;
        }

        .bawah {
            position: relative;
            height: 725px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('{{ asset("images/footer-bg.jpg") }}');
            background-size: cover;
            background-position: center;
            overflow: hidden;
    }

        .bawah .overlaybawah {
            position: absolute;
            inset: 0;
            background: rgba(150, 0, 0, 0.5);
            backdrop-filter: blur(6px);
    }

        .contentbawah {
            position: relative;
            text-align: center;
            max-width: 800px;
            z-index: 2;
            padding: 20px;
        }

        .contentbawah h2 {
            color: #fff;
            font-size: 42px;
            font-weight: 700;
            line-height: 1.3;
        }

        .contentbawah h2 span {
            color: #D32F2F;
        }

        .cta-button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 32px;
            background: #D32F2F;
            color: #fff;
            font-weight: 600;
            border-radius: 10px;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            transition: 0.25s;
        }

        .cta-button:hover {
            background: #b82828;
        }.cta-button-atas:hover {
            background: #b82828;
        }

        .footer-slcorp {
            background: linear-gradient(to bottom, #8b0a0a, #2b0000);
            padding: 60px 80px 20px;
            color: white;
        }

        .footer-container {
            max-width: 1920px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 50px;
        }

        .footer-column h4 {
            font-weight: 700;
            margin-bottom: 15px;
        }

        .footer-column p {
            opacity: 0.9;
            line-height: 1.6;
        }

        .footer-icon-text i {
            margin-right: 10px;
        }

        .footer-social i {
            font-size: 28px;
            margin-right: 18px;
            cursor: pointer;
            transition: 0.2s;
        }

        .footer-social i:hover {
            transform: scale(1.2);
            color: #ffdddd;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            opacity: 0.7;
        }

 

    </style>
</head>
<body>
    <section class="hero">
    <div class="container">
    <header>
        <nav>
            <div class="logo">SLCorp</div>
            <ul style="display: flex; gap: 30px; list-style: none;">
                <li><a href="#" style="text-decoration: none; color: #ffffffff;">Home</a></li>
                <li><a href="#" style="text-decoration: none; color: #ffffffff;">Tentang Kami</a></li>
                <li><a href="#" style="text-decoration: none; color: #ffffffff;">Kontak</a></li>
                <li><a href="{{ URL::route('login') }}" class="cta-button-atas" style="text-decoration: none;">Daftar Sekarang</a></li>
            </ul>
        </nav>
    </header>
    <div class="herotext">
        <h1>Bangun Karirmu dan Ciptakan Standar Baru di Industri F&B Bersama SL Corp.</h1>
        <p>SL Corp adalah perusahaan yang bergerak di bidang Food & Beverage yang berkomitmen menghadirkan produk berkualitas, 
            pelayanan terbaik, dan lingkungan kerja yang mendukung pertumbuhan karier.</p>
        <button class="cta-button" onclick="window.location='{{ url::route('login') }}'">Mulai Sekarang</button>
    </div>
    </div>        
    </section>

    <section class="tentangkami">
        <h1 style="text-align: center; margin-bottom: 30px; font-weight: 600; font-size: 48px; margin-top: -60px">Tentang Kami</h1>
        <p style="text-align: center; margin-bottom: 10px; margin-top: -25px; margin-left: 17%; margin-right: 17%; font-size: 18px">Dari Purwokerto untuk Indonesia. Sejak 2013, <span class="brand">SL Corp</span> hadir membawa kelezatan khas Nusantara ke tingkat yang lebih tinggi. Mengelola puluhan outlet dan beragam brand kuliner inovatif, kami berkomitmen menyajikan kualitas rasa terbaik dengan sistem operasional kelas dunia.</p>

        <div class="stats">
            <div class="stat">
                <div class="statangka">61+</div>
                <div class="stat-label">Restoran</div>
            </div>
            <div class="stat">
                <div class="statangka">10</div>
                <div class="stat-label">Brand</div>
            </div>
            <div class="stat">
                <div class="statangka">10+</div>
                <div class="stat-label">Pengalaman</div>
            </div>
        </div>
        <div class="containercard">
        <div class="card">
            <div class="cardnya">
                <div class="gambarcard">
                    <img src="{{ asset('images/chart1.png') }}" alt="Visi">
                </div>
                <p>Menjadi perusahaan kuliner fenomenal yang memberi manfaat besar bagi masyarakat, dengan tujuan kesuksesan dunia dan akhirat.</p>
            </div>
            <div class="cardnya">
                <div class="gambarcard">
                    <img src="{{ asset('images/focus1.png') }}" alt="Misi">
                </div>
                <p>Menuju 1.000 outlet nasional melalui inovasi berkelanjutan dan standarisasi kualitas, sembari membangun talenta yang profesional serta berkarakter religius.</p>
            </div>
            <div class="cardnya">
                <div class="gambarcard">
                    <img src="{{ asset('images/targeting1.png') }}" alt="Tujuan">
                </div>
                <p>Mewujudkan keunggulan operasional melalui digitalisasi terintegrasi dan optimalisasi rantai pasok, guna menjamin konsistensi kualitas serta inovasi produk yang mendorong ekspansi pasar berkelanjutan.</p>
            </div>
        </div>
        </div>
        <div class="judulcardjudul">
            <div class="judulcard1">VISI</div>
            <div class="judulcard2">MISI</div>
            <div class="judulcard3">TUJUAN</div>
        </div>
    </section>

<section class="bawah">
    <div class="overlaybawah"></div>
    <div class="contentbawah">
        <h2>
            Ingin bekerjasama atau menjadi 
            <span>bagian dari perjalanan kami?</span>
        </h2>
        <a href="{{ URL::route('login') }}" class="cta-button">Daftar Sekarang</a>
    </div>
</section>

<footer class="footer-slcorp">
    <div class="footer-container">
        <div class="footer-column">
            <h4>Alamat</h4>
            <p>
                Jl. Suwatio No.13B, Karanggayam, Teluk, Kec. Purwokerto Sel.,  
                Kabupaten Banyumas,<br>
                Jawa Tengah 53145
            </p>
        </div>
        <div class="footer-column">
            <h4>SL Corp</h4>
            <p>Djago Djowo<br>Bebek Subsidi<br>Mampir Pawon</p>
        </div>
        <div class="footer-column">
            <h4>Kontak</h4>
            <p class="footer-icon-text">
                <i class="fas fa-phone"></i>
                (+62) 89655299741
            </p>
            <p class="footer-icon-text">
                <i class="fas fa-envelope"></i>
                slcorp@gmail.com
            </p>
        </div>
        <div class="footer-column">
            <h4>Kunjungi Kami</h4>
            <div class="footer-social">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-facebook"></i>
            </div>
        </div>
    </div>
    <p class="footer-bottom">
        © 2025 Cimol. Seluruh hak cipta dilindungi.
    </p>
    </footer>
    <script>
        window.addEventListener("scroll", function () {
            const header = document.querySelector("header");

            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
    </script>
</body>
</html>