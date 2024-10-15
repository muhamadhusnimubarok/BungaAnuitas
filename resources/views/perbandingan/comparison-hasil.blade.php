<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perbandingan Bunga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Hasil Perbandingan Bunga Tunggal dan Majemuk</h1>

        <div class="alert alert-info">
            <h4 class="text-center">Modal Awal: Rp {{ number_format($principal, 2) }}</h4>
            <p class="text-center"><strong>Periode Waktu:</strong> {{ $time }} tahun</p>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th>Jenis Bunga</th>
                    <th>Jumlah Bunga</th>
                    <th>Total dengan Bunga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Bunga Tunggal</strong></td>
                    <td class="text-center">Rp {{ number_format($simple_interest, 2) }}</td>
                    <td class="text-center">Rp {{ number_format($total_simple_interest, 2) }}</td>
                </tr>
                <tr>
                    <td><strong>Bunga Majemuk</strong></td>
                    <td class="text-center">Rp {{ number_format($compound_interest, 2) }}</td>
                    <td class="text-center">Rp {{ number_format($total_compound_interest, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="/comparison-form" class="btn btn-primary">Bandingkan Lagi</a>
            <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
