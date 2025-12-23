<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #E5E5E5;
            font-family: 'Poppins', sans-serif;
        }

        .faq-container {
            max-width: 720px;
            margin: 90px auto;
            background: linear-gradient(135deg, #D32F2F, #8E1E1E);
            padding: 40px 45px;
            border-radius: 22px;
            box-shadow: 0 18px 40px rgba(0,0,0,.28);
            color: #fff;
        }

        .faq-container h3 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 35px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }

        .form-control {
            width: 100%;
            border-radius: 14px;
            border: none;
            padding: 13px 16px;
            font-size: 14px;
        }

        textarea {
            resize: none;
        }

        .form-actions {
            text-align: center;
            margin-top: 35px;
        }

        .btn-submit {
            background: #fff;
            color: #D32F2F;
            font-weight: 600;
            padding: 11px 34px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
        }

        .btn-cancel {
            margin-left: 12px;
            padding: 11px 34px;
            border-radius: 30px;
            border: 2px solid #fff;
            color: #fff;
            text-decoration: none;
        }

        .btn-cancel:hover {
            background: #fff;
            color: #D32F2F;
        }
    </style>
</head>
<body>

<div class="faq-container">
    <h3>Edit FAQ</h3>

    <form action="{{ route('faq.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Pertanyaan</label>
            <input
                type="text"
                name="pertanyaan"
                class="form-control"
                value="{{ $faq->pertanyaan }}"
                required
            >
        </div>

        <div class="form-group">
            <label>Jawaban</label>
            <textarea name="jawaban" rows="4" class="form-control" required>{{ $faq->jawaban }}</textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-submit">Update</button>
            <a href="{{ route('admin.faq') }}" class="btn-cancel">Batal</a>
        </div>
    </form>
</div>

</body>
</html>