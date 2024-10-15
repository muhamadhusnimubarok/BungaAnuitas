<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #explanation {
            display: none; /* Tersembunyi secara default */
        }
    </style>
    <script>
        function toggleExplanation() {
            const explanation = document.getElementById("explanation");
            explanation.style.display = explanation.style.display === "none" ? "block" : "none"; // Toggle visibility
        }

        // Function to format numbers as currency
        function formatCurrency(value) {
            return 'Rp ' + new Intl.NumberFormat('id-ID').format(value);
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Hasil Penghitungan Bunga Tunggal</h1>
        <div class="alert alert-info" role="alert">
            <p><strong>Bunga (B):</strong> <span id="interest">{{ $interest }}</span></p>
            <p><strong>Total Jumlah (Mt):</strong> <span id="total_amount">{{ $total_amount }}</span></p>
        </div>

        <div class="text-center mt-4">
            <a href="/simple-interest-form" class="btn btn-primary">Kembali ke Form</a>
            <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
            <button class="btn btn-danger" onclick="toggleExplanation()">Lihat Proses Penghitungan</button>
        </div>

        <div id="explanation" class="mt-4">
            <h2>Proses Penghitungan Bunga Tunggal</h2>
            <div class="alert alert-light">
                <h5>Langkah-langkah Penghitungan:</h5>
                <ul>
                    <li><strong>Modal Awal (M):{{ $principal }} {{ $currency }}</li></strong> 
                    <li><strong>Suku Bunga (b): {{ $interest_rate }}%</li> </strong>
                    <li><strong>Periode Waktu:</strong> {{ $time }} {{ $time_period }}</li>
                    <li><strong>Rumus Bunga (B):</strong> B = M * b * t</li>
                    <li><strong>Perhitungan Bunga (B):</strong> B = {{ $principal }} * {{ $interest_rate }} * {{ $time }} = {{ $interest }}</li>
                    <li><strong>Total Jumlah (Mt):</strong> Mt = M + B = {{ $principal }} + {{ $interest }} = {{ $total_amount }}</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Format currency on page load
        document.getElementById("interest").innerText = formatCurrency({{ $interest }});
        document.getElementById("total_amount").innerText = formatCurrency({{ $total_amount }});
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
