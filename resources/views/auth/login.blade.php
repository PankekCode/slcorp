<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #F7F7F7;
            font-family: poppins, sans-serif;
        }

        .background-container {
        width: 500px;
        height: 100%;
        background-image: url('{{ asset("images/bglogin.png") }}');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 0%;
    }

        .login-container {
            width: 350px;
            background: #F7F7F7;
            margin-right: 300px;
            margin-left: auto;
            margin-top: 120px;
            margin-bottom: auto;
            padding: 30px;
            border-radius: 10px;
        }

        .btn-login {
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            border: none;
            background-color: #D32F2F;
            color: white;
            font-weight: bold;
        }

        .btn-login:hover {
            background-color: #B42828;
        }

        .btn-google {
            width: 100%;
            padding: 8px;
            background: white;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .btn-google img {
            width: 20px;
            margin-right: 10px;
        }

        .divider {
            width: 100%;
            height: 1px;
            background-color: #ccc;
            margin: 25px 0;
        }

        a {
            text-decoration: none;
            font-size: 14px;
        }

        .small-text {
            font-size: 13px;
            text-align: right;
            margin-top: 5px;
        }

    </style>
</head>

<body>

    <div class="background-container"></div>

    <div class="login-container">

        <h4 class="fw-bold mb-4 text-center"></h4>

        <form action="/login" method="POST">
            @csrf

            <label>Email</label>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required />

            <label>Password</label>
            <input type="password" name="password" class="form-control mb-1" placeholder="Password" required />

            <div class="small-text">
                <a href="#">Forgot Password ?</a>
            </div>

            <button type="submit" class="btn-login mt-3">Log In</button>
        </form>

        <div class="divider"></div>

        <button class="btn-google d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png">
            Continue With Google
        </button>

        <p class="text-center mt-3 small-text">
            New user? <a href="/register">sign up</a>
        </p>

    </div>

</body>
</html>
