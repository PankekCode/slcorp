<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLCorp</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        }
        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
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
            font-family: poppins, sans-serif;
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
        
        .cta-button {
            background: #D32F2F;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .features {
            padding: 80px 5%;
            background: #f4f4f4;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 30px;
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
                <li><a href="#" style="text-decoration: none; color: #ffffffff;">Features</a></li>
                <li><a href="#" style="text-decoration: none; color: #ffffffff;">About</a></li>
                <li><a href="#" class="cta-button" style="text-decoration: none;">Daftar Sekarang</a></li>
            </ul>
        </nav>
    </header>
    <div class="herotext">
        <h1>Bangun Karirmu dan Ciptakan Standar Baru di Industri F&B Bersama SL Corp.</h1>
        <p>SL Corp adalah perusahaan yang bergerak di bidang Food & Beverage yang berkomitmen menghadirkan produk berkualitas, 
            pelayanan terbaik, dan lingkungan kerja yang mendukung pertumbuhan karier.</p>
        <button class="cta-button">Mulai Sekarang</button>
    </div>
    </div>        
    </section>

    <section class="features">
        <h2 style="text-align: center; margin-bottom: 50px;">Fitur Unggulan</h2>
        <div class="feature-grid">
            <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3>Fitur 1</h3>
                <p>Deskripsi fitur pertama kami</p>
            </div>
            <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3>Fitur 2</h3>
                <p>Deskripsi fitur kedua kami</p>
            </div>
            <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3>Fitur 3</h3>
                <p>Deskripsi fitur ketiga kami</p>
            </div>
        </div>
    </section>


    <footer>
        <p>&copy; 2024 SLCorp. All rights reserved.</p>
    </footer>
</body>
</html>