<?php

// app/Http/Controllers/CompoundInterestController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompoundInterestController extends Controller
{
    public function calculate(Request $request)
    {
        $calculation_type = $request->input('calculation_type');

        if ($calculation_type === 'final') {
            return $this->calculateFinalCapital($request);
        } elseif ($calculation_type === 'initial') {
            return $this->calculateInitialCapital($request);
        }
    }

    public function calculateFinalCapital(Request $request)
    {
        $M = $request->input('principal'); // Modal awal
        $b = $request->input('interest_rate') / 100; // Ubah persentase menjadi desimal
        $t = $request->input('time');

        // Rumus untuk modal akhir
        $result = $M * pow(1 + $b, $t);

        return view('bungamajemuk.bunga_majemuk_hasil', [
            'calculation_type' => 'final_capital', // Tipe perhitungan
            'principal' => $M,
            'result' => $result,
            'interest_rate' => $request->input('interest_rate'),
            'time' => $t,
            'time_period' => $request->input('time_period'),
            'currency' => $request->input('currency', 'IDR'), // Tambahkan currency jika perlu
        ]);
    }

    public function calculateInitialCapital(Request $request)
    {
        $result = $request->input('final_capital'); // Modal akhir yang dimasukkan
        $b = $request->input('interest_rate') / 100; // Ubah persentase menjadi desimal
        $t = $request->input('time');

        // Rumus untuk modal awal
        $principal = $result / pow(1 + $b, $t);

        return view('bungamajemuk.bunga_majemuk_hasil', [
            'calculation_type' => 'initial_capital', // Tipe perhitungan
            'principal' => $principal,
            'result' => $result,
            'interest_rate' => $request->input('interest_rate'),
            'time' => $t,
            'time_period' => $request->input('time_period'),
            'currency' => $request->input('currency', 'IDR'), // Tambahkan currency jika perlu
        ]);
    }
}
