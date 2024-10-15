<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Simple and Compound Interest</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Membandingkan Bunga Tunggal dan Majemuk</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="/compare-interest">
                    @csrf
                    <!-- Principal Amount -->
                    <div class="mb-3">
                        <label for="principal" class="form-label">Modal Awal:</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" name="principal" id="principal" required>
                        </div>
                    </div>

                    <!-- Simple Interest Rate -->
                    <div class="mb-3">
                        <label for="simple_interest_rate" class="form-label">Suku Bunga (Tunggal):</label>
                        <div class="input-group">
                            <input type="number" step="0.01" class="form-control" name="simple_interest_rate" id="simple_interest_rate" required>
                            <span class="input-group-text">%</span>
                        </div>
                    </div>

                    <!-- Compound Interest Rate -->
                    <div class="mb-3">
                        <label for="compound_interest_rate" class="form-label">Suku Bunga (Majemuk):</label>
                        <div class="input-group">
                            <input type="number" step="0.01" class="form-control" name="compound_interest_rate" id="compound_interest_rate" required>
                            <span class="input-group-text">%</span>
                        </div>
                    </div>

                    <!-- Time Period -->
                    <div class="mb-3">
                        <label for="time" class="form-label">Periode:</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="time" id="time" required>
                            <select class="form-select" name="time_unit" id="time_unit" required>
                                <option value="" disabled selected>Pilih Periode</option>
                                <option value="months">Bulan</option>
                                <option value="quarters">Triwulan</option>
                                <option value="four_months">Caturwulan</option>
                                <option value="semester">Semester</option>
                                <option value="years">Tahun</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Bandingkan</button>
                    </div>
                    <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
