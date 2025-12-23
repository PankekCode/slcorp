<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Success</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: rgba(0,0,0,.35);
        }
        .wrap {
            min-height: 100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding: 30px;
        }
        .modal-like {
            width: 720px;
            max-width: 100%;
            background:#fff;
            border-radius: 10px;
            padding: 55px 45px;
            text-align:center;
            box-shadow: 0 12px 30px rgba(0,0,0,.18);
        }
        .check {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            border: 8px solid #d9dfe8;
            margin: 0 auto 18px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size: 46px;
            color: #1b7f2a;
        }
        .title {
            color:#ff3b3b;
            font-size: 44px;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .desc {
            color:#9a9a9a;
            font-size: 14px;
            margin-bottom: 22px;
        }
        .btn-red {
            background:#ff3b3b;
            border:none;
            padding: 14px 20px;
            border-radius: 6px;
            width:100%;
            font-weight:600;
        }
        .btn-red:hover { background:#e63434; }
    </style>
</head>

<body>
<div class="wrap">
    <div class="modal-like">
        <div class="check">✓</div>
        <div class="title">Successfully</div>
        <div class="desc">Your password has been reset successfully</div>

        <a href="{{ route('admin.manajemen') }}" class="btn btn-red text-white">
            CONTINUE
        </a>
    </div>
</div>
</body>
</html>