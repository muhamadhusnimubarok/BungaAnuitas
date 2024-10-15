<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Interest Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function updateLabels() {
            const calculationType = document.querySelector('input[name="calculation_type"]:checked').value;
            const principalInput = document.getElementById("principal_input");
            const finalCapitalInput = document.getElementById("final_capital_input");

            if (calculationType === "final") {
                principalInput.style.display = "block"; // Tampilkan input modal awal
                finalCapitalInput.style.display = "none"; // Sembunyikan input modal akhir
                document.getElementById("principal").required = true; // Modal awal wajib diisi
                document.getElementById("final_capital").required = false; // Modal akhir tidak wajib
            } else {
                principalInput.style.display = "none"; // Sembunyikan input modal awal
                finalCapitalInput.style.display = "block"; // Tampilkan input modal akhir
                document.getElementById("principal").required = false; // Modal awal tidak wajib
                document.getElementById("final_capital").required = true; // Modal akhir wajib diisi
            }
        }

        function updateInterestRateLabel() {
            const period = document.getElementById("time_period").value;
            const rateLabel = document.getElementById("interest_rate_label");
            rateLabel.innerHTML = "Suku Bunga (%) per " + (period === "quarterly" ? "Triwulan:" : period === "quadrimester" ? "Caturwulan:" : period === "semester" ? "Semester:" : "Tahun:");
        }

        window.onload = updateLabels; // Jalankan saat halaman dimuat
    </script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Penghitung Bunga Majemuk</h1>
        <form method="POST" action="/compound-interest">
            @csrf
            <div class="mb-3">
                <label for="calculation_type" class="form-label">Pilih Jenis Perhitungan:</label>
                <div>
                    <input type="radio" id="final_capital" name="calculation_type" value="final" onclick="updateLabels()" checked>
                    <label for="final_capital">Hitung Modal Akhir (Mt)</label>
                    <input type="radio" id="initial_capital" name="calculation_type" value="initial" onclick="updateLabels()">
                    <label for="initial_capital">Hitung Modal Awal (M)</label>
                </div>
            </div>

            <div class="mb-3" id="principal_input">
                <label id="principal_label" for="principal" class="form-label">Modal Awal (M):</label>
                <input type="number" class="form-control" id="principal" name="principal">
            </div>

            <div class="mb-3" id="final_capital_input" style="display: none;">
                <label id="final_capital_label" for="final_capital" class="form-label">Modal Akhir (Mt):</label>
                <input type="number" class="form-control" id="final_capital" name="final_capital">
            </div>

            <div class="mb-3">
                <label id="interest_rate_label" for="interest_rate" class="form-label">Suku Bunga (%):</label>
                <input type="number" step="0.01" class="form-control" id="interest_rate" name="interest_rate" required>
            </div>

            <div class="mb-3">
                <label for="time_period" class="form-label">Periode Waktu (t):</label>
                <select id="time_period" name="time_period" class="form-select" onchange="updateInterestRateLabel()" required>
                    <option value="yearly">Tahun</option>
                    <option value="semester">Semester</option>
                    <option value="quadrimester">Caturwulan</option>
                    <option value="quarterly">Triwulan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="time_input" class="form-label">Jumlah Periode:</label>
                <input type="number" class="form-control" id="time_input" name="time" placeholder="Masukkan jumlah Tahun" required>
            </div>

            <button type="submit" class="btn btn-primary">Hitung</button>
            <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
