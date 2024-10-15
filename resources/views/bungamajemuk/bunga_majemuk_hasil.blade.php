<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Interest Result</title>
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
    </script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Hasil Penghitungan Bunga Majemuk</h1>
        <div class="alert alert-info" role="alert">
            @if($calculation_type == 'final_capital')
                <p><strong>Modal Awal (M):</strong> {{ number_format($principal, 2) }} {{ $currency }}</p>
                <p><strong>Modal Akhir (Mt):</strong> {{ number_format($result, 2) }} {{ $currency }}</p>
            @else
                <p><strong>Modal Akhir (Mt):</strong> {{ number_format($result, 2) }} {{ $currency }}</p>
                <p><strong>Modal Awal (M):</strong> {{ number_format($principal, 2) }} {{ $currency }}</p>
            @endif
            <p><strong>Suku Bunga:</strong> {{ $interest_rate }}%</p>
            <p><strong>Waktu:</strong> {{ $time }} {{ $time_period }}</p>
        </div>

        <div class="text-center mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali ke Form</a>
            <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
            <button class="btn btn-danger" onclick="toggleExplanation()">Lihat Proses Penghitungan</button>
        </div>

        <div id="explanation" class="mt-4">
            <h2>Proses Penghitungan Bunga Majemuk</h2>
            <div class="alert alert-light">
                <h5>Langkah-langkah Penghitungan:</h5>
                @if($calculation_type == 'final_capital')
                    <ul>
                        <li><strong>Modal Awal (M):</strong> {{ $principal }} {{ $currency }}</li>
                        <li><strong>Suku Bunga (b):</strong> {{ $interest_rate }}%</li>
                        <li><strong>Periode Waktu:</strong> {{ $time }} {{ $time_period }}</li>
                        <li><strong>Rumus Modal Akhir (Mt):</strong> Mt = M * (1 + b)^t</li>
                        <li><strong>Perhitungan Modal Akhir:</strong> Mt = {{ $principal }} * (1 + {{ $interest_rate / 100 }})^{{ $time }} = {{ number_format($result, 2) }}</li>
                    </ul>
                @else
                    <ul>
                        <li><strong>Modal Akhir (Mt):</strong> {{ $result }} {{ $currency }}</li>
                        <li><strong>Suku Bunga (b):</strong> {{ $interest_rate }}%</li>
                        <li><strong>Periode Waktu:</strong> {{ $time }} {{ $time_period }}</li>
                        <li><strong>Rumus Modal Awal (M):</strong> M = Mt / (1 + b)^t</li>
                        <li><strong>Perhitungan Modal Awal:</strong> M = {{ $result }} / (1 + {{ $interest_rate / 100 }})^{{ $time }} = {{ number_format($principal, 2) }}</li>
                    </ul>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
