<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnuityController extends Controller
{
    public function generateTable(Request $request)
{
    $principal = $request->input('principal'); // Modal Awal
    $annual_interest_rate = $request->input('interest_rate') / 100; // Ubah persentase menjadi desimal
    $months = $request->input('time'); // Jumlah Bulan

    // Hitung angsuran tetap bulanan
    $monthly_interest_rate = $annual_interest_rate / 12;
    
    // Menghitung angsuran bulanan tetap
    $monthly_payment = ($principal * $monthly_interest_rate) / (1 - pow(1 + $monthly_interest_rate, -$months));

    $amortization_table = [];
    $remaining_balance = $principal;

    // Hitung angsuran untuk setiap bulan
    for ($month = 1; $month <= $months; $month++) {
        $interest = $remaining_balance * $monthly_interest_rate; // Bunga untuk bulan ini
        $principal_payment = $monthly_payment - $interest; // Pembayaran pokok
        $remaining_balance -= $principal_payment; // Sisa pinjaman setelah pembayaran

        // Simpan hasil ke dalam tabel
        $amortization_table[] = [
            'month' => $month,
            'interest' => $interest,
            'principal_payment' => $principal_payment,
            'monthly_payment' => $monthly_payment,
            'remaining_balance' => max(0, $remaining_balance) // Pastikan sisa pinjaman tidak negatif
        ];
    }

    // Return view dengan data yang dihasilkan
    return view('anuitas.annuity_amortization_table', [
        'principal' => $principal,
        'interest_rate' => $annual_interest_rate * 100, // Mengembalikan ke persen
        'months' => $months,
        'amortization_table' => $amortization_table
    ]);
}

}
