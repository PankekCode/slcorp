<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 text-center" style="width: 320px;">
    <div class="mb-3">
        <div class="rounded-circle border border-success d-inline-flex align-items-center justify-content-center"
             style="width:60px;height:60px;">
            ✔
        </div>
    </div>

    <h5 class="text-success">Successfully</h5>
    <p class="text-muted small">
        Your password has been reset successfully
    </p>

    <a href="{{ route('user.dashboard') }}" class="btn btn-danger w-100">
        CONTINUE
    </a>
</div>

</body>
</html>