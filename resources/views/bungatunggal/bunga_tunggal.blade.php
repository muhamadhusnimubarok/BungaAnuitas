<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function updateCurrencyLabel() {
            const currency = document.getElementById("currency").value;
            const currencyLabel = document.getElementById("currency_label");
            currencyLabel.textContent = currency === "IDR" ? "Rp" : "$";
        }

        function updateInterestRateLabel() {
            const period = document.getElementById("time_period").value;
            const rateLabel = document.getElementById("interest_rate_label");
            const timeInput = document.getElementById("time_input");

            switch (period) {
                case "quarterly":
                    rateLabel.innerHTML = "Suku Bunga (%) per Triwulan:";
                    timeInput.placeholder = "Masukkan jumlah Triwulan";
                    break;
                case "quadrimester":
                    rateLabel.innerHTML = "Suku Bunga (%) per Caturwulan:";
                    timeInput.placeholder = "Masukkan jumlah Caturwulan";
                    break;
                case "semester":
                    rateLabel.innerHTML = "Suku Bunga (%) per Semester:";
                    timeInput.placeholder = "Masukkan jumlah Semester";
                    break;
                case "yearly":
                    rateLabel.innerHTML = "Suku Bunga (%) per Tahun:";
                    timeInput.placeholder = "Masukkan jumlah Tahun";
                    break;
            }
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Menghitung Bunga Tunggal</h1>
        <form method="POST" action="/simple-interest">
            @csrf
            <div class="mb-3">
                <label for="currency" class="form-label">Pilih Mata Uang:</label>
                <select id="currency" name="currency" class="form-select" onchange="updateCurrencyLabel()" required>
                    <option value="IDR">Rupiah (Rp)</option>
                    <option value="USD">Dollar Amerika ($)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="principal" class="form-label">Modal Awal (M):</label>
                <div class="input-group">
                    <span class="input-group-text" id="currency_label">Rp</span>
                    <input type="number" class="form-control" name="principal" aria-describedby="currency_label" required>
                </div>
            </div>

            <div class="mb-3">
                <label id="interest_rate_label" for="interest_rate" class="form-label">Suku Bunga (%):</label>
                <input type="number" step="0.01" class="form-control" name="interest_rate" required>
            </div>

            <div class="mb-3">
                <label for="time_input" class="form-label">Periode Waktu:</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="time_input" name="time" placeholder="Masukkan jumlah" required>
                    <select id="time_period" name="time_period" class="form-select" onchange="updateInterestRateLabel()" required>
                        <option value="yearly">Tahun</option>
                        <option value="semester">Semester</option>
                        <option value="quadrimester">Caturwulan</option>
                        <option value="quarterly">Triwulan</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Hitung</button>
            <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
