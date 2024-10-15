<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuity Amortization Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Kalkulator Untuk Menghitung Anuitas</h1>
        <form method="POST" action="/annuity-table">
            @csrf
            <div class="mb-3">
                <label for="principal" class="form-label">Jumlah Pinjaman:</label>
                <input type="number" class="form-control" name="principal" required>
            </div>

            <div class="mb-3">
                <label for="interest_rate" class="form-label">Bunga Pinjaman:</label>
                <div class="input-group">
                    <input type="number" step="0.01" class="form-control" name="interest_rate" required>
                    <span class="input-group-text">%</span>
                </div>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Lama Pinjaman:</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="time" required>
                    <span class="input-group-text">tahun</span>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Hitung Anuitas</button>
            <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
