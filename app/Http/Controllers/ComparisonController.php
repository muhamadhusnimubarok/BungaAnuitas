<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function compare(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'principal' => 'required|numeric',
            'simple_interest_rate' => 'required|numeric',
            'compound_interest_rate' => 'required|numeric',
            'time' => 'required|numeric',
        ]);

        // Ambil input
        $principal = $request->input('principal');
        $simple_interest_rate = $request->input('simple_interest_rate');
        $compound_interest_rate = $request->input('compound_interest_rate');
        $time = $request->input('time');

        // Hitung bunga tunggal
        $simple_interest = $principal * ($simple_interest_rate / 100) * $time;
        $total_simple_interest = $principal + $simple_interest;


        // Hitung bunga majemuk
        $compound_interest = $principal * (pow(1 + ($compound_interest_rate / 100), $time) - 1);
        $total_compound_interest = $principal + $compound_interest;

        // Tampilkan hasil
        return view('perbandingan.comparison-hasil', compact(
            'principal',
            'simple_interest',
            'total_simple_interest',
            'compound_interest',
            'total_compound_interest',
            'time'
        ));
    }
}
