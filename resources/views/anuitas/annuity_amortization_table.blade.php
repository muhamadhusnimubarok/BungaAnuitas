@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Tabel Amortisasi Anuitas</h2>

    <div class="alert alert-info">
        <p><strong>Modal Awal:</strong> Rp {{ number_format($principal, 2) }}</p>
        <p><strong>Suku Bunga Tahunan:</strong> {{ $interest_rate }}%</p>
        <p><strong>Jumlah Bulan:</strong> {{ $months }}</p>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Bulan</th>
                <th>Angsuran Bunga</th>
                <th>Angsuran Pokok</th>
                <th>Total Angsuran</th>
                <th>Sisa Pinjaman</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total_interest = 0;
                $total_principal_payment = 0;
                $total_monthly_payment = 0;
            @endphp
            
            @foreach($amortization_table as $row)
                <tr>
                    <td>{{ $row['month'] }}</td>
                    <td>Rp.{{ number_format($row['interest'], 2) }}</td>
                    <td>Rp.{{ number_format($row['principal_payment'], 2) }}</td>
                    <td>Rp.{{ number_format($row['monthly_payment'], 2) }}</td>
                    <td>Rp.{{ number_format($row['remaining_balance'], 2) }}</td>
                </tr>

                @php
                    $total_interest += $row['interest'];
                    $total_principal_payment += $row['principal_payment'];
                    $total_monthly_payment += $row['monthly_payment'];
                @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>Rp.{{ number_format($total_interest, 2) }}</strong></td>
                <td><strong>Rp.{{ number_format($total_principal_payment, 2) }}</strong></td>
                <td><strong>Rp.{{ number_format($total_monthly_payment, 2) }}</strong></td>
                <td></td> <!-- Kosongkan kolom untuk Sisa Pinjaman total -->
            </tr>
        </tfoot>
    </table>

    <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
