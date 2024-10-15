<?php

namespace App\Http\Controllers;

use App\Models\SimpleInterest;
use Illuminate\Http\Request;

class SimpleInterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SimpleInterest $simpleInterest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SimpleInterest $simpleInterest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SimpleInterest $simpleInterest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SimpleInterest $simpleInterest)
    {
        //
    }
    public function calculate(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'principal' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'time' => 'required|numeric',
            'currency' => 'required|string',
            'time_period' => 'required|string',
        ]);
    
        // Hitung bunga tunggal
        $principal = $request->input('principal');
        $interest_rate = $request->input('interest_rate');
        $time = $request->input('time');
        $currency = $request->input('currency');
        $time_period = $request->input('time_period');
    
        $interest = $principal * ($interest_rate / 100) * $time;
        $total_amount = $principal + $interest;
    
        // Simpan input pengguna ke session
        $request->flash();
    
        // Redirect dengan hasil perhitungan
        return view('bungatunggal.bunga_tunggal_hasil', compact('interest', 'total_amount', 'principal', 'currency', 'interest_rate', 'time', 'time_period'));
    }
    
    
    


}
