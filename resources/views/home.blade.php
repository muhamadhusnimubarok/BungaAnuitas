@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h1>Selamat Datang di Aplikasi Penghitung Bunga dan Anuitas</h1>
    <p class="lead">Silahkan Pilih Kebutuhan Anda:</p>
</div>

<div class="row mt-4">
    <div class="col-md-3">
        <div class="card h-100">
            <!-- Ganti dengan URL gambar yang sesuai -->
            <img src="{{ asset('img/tunggal.png') }}" class="card-img-top" alt="Simple Interest">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Kalkulator Menghitung Bunga Tunggal</h5>
                <p class="card-text">Kalkulator bunga tunggal menghitung bunga berdasarkan nilai pokok, suku bunga, dan jangka waktu.</p>
                <div class="mt-auto">
                    <a href="/simple-interest-form" class="btn btn-primary">Go to Calculator</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card h-100">
            <!-- Ganti dengan URL gambar yang sesuai -->
            <img src="{{ asset('img/majemuk.png') }}" class="card-img-top" alt="Compound Interest">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Kalkulator Menghitung Bunga Majemuk</h5>
                <p class="card-text">Kalkulator bunga majemuk menghitung bunga dengan mempertimbangkan nilai pokok, suku bunga, dan jangka waktu. Pengguna dapat memilih untuk menghitung nilai masa depan atau nilai awal di masa lalu.</p>
                <div class="mt-auto">
                    <a href="/compound-interest-form" class="btn btn-primary">Go to Calculator</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card h-100">
            <!-- Ganti dengan URL gambar yang sesuai -->
            <img src="{{ asset('img/anuitas.jpg') }}" class="card-img-top" alt="Annuity">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Kalkulator Menghitung Anuitas</h5>
                <p class="card-text">Kalkulator anuitas menghitung pembayaran berkala berdasarkan nilai pokok, suku bunga, dan jumlah periode. Ini membantu pengguna merencanakan pembayaran pinjaman atau investasi dengan cara yang terstruktur.</p>
                <div class="mt-auto">
                    <a href="/annuity-form" class="btn btn-primary">Go to Generator</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card h-100">
            <!-- Ganti dengan URL gambar yang sesuai -->
            <img src="{{ asset('img/comparison.jpg') }}" class="card-img-top" alt="Comparison">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Membandingkan Bunga Tunggak dan Majemuk</h5>
                <p class="card-text">Kalkulator perbandingan ini menunjukkan perbedaan antara bunga tunggal dan majemuk berdasarkan nilai pokok, suku bunga, dan jangka waktu yang sama. Pengguna dapat memahami mana yang lebih menguntungkan untuk investasi mereka.</p>
                <div class="mt-auto">
                    <a href="/comparison-form" class="btn btn-primary">Go to Comparison</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
