<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #F2F2F2;
            font-family: 'Poppins', sans-serif;
        }
        .wrap {
            min-height: 100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding: 30px;
        }
        .card-reset {
            width: 650px;
            max-width: 100%;
            background:#fff;
            border-radius: 12px;
            padding: 40px 45px;
            box-shadow: 0 12px 30px rgba(0,0,0,.12);
            text-align:center;
        }
        .brand {
            font-weight:700;
            font-size: 28px;
            margin-bottom: 15px;
            color: #B8860B; /* kalau mau mirip logo gold */
        }
        .title {
            color:#ff3b3b;
            font-size: 40px;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .desc {
            color:#9a9a9a;
            font-size: 14px;
            margin-bottom: 28px;
        }
        .form-label {
            font-size: 12px;
            color:#ff3b3b;
            float:left;
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
    <div class="card-reset">

        <div class="brand">SL INDONESIA</div>
        <div class="title">Reset Password</div>
        <div class="desc">
            Set the new password for your account so you can login and access all features.
        </div>

        <form action="{{ route('admin.manajemen.reset', $admin->id) }}" method="POST">
            @csrf

            <div class="mb-3 text-start">
                <label class="form-label">Enter new password</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4 text-start">
                <label class="form-label">Confirm password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-red text-white">
                UPDATE PASSWORD
            </button>
        </form>

    </div>
</div>
</body>
</html>