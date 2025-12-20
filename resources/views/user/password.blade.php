<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 text-center" style="width: 360px;">
    <h5 class="mb-3 text-danger">Reset Password</h5>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <div class="mb-3 text-start">
            <label class="form-label">New Password</label>
            <input type="password"
                   name="password"
                   class="form-control @error('password') is-invalid @enderror"
                   required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 text-start">
            <label class="form-label">Confirm Password</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   required>
        </div>

        <button class="btn btn-danger w-100">
            UPDATE PASSWORD
        </button>
    </form>
</div>

</body>
</html>
