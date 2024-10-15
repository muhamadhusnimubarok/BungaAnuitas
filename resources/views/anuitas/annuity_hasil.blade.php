@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Annuity Amortization Table</h2>

    <div class="alert alert-info">
        <p><strong>Loan Amount:</strong> {{ number_format($principal, 2) }}</p>
        <p><strong>Annual Interest Rate:</strong> {{ $interest_rate }}%</p>
        <p><strong>Number of Years:</strong> {{ $time }}</p>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Year</th>
                <th>Payment</th>
                <th>Interest</th>
                <th>Principal</th>
                <th>Remaining Balance</th>
            </tr>
        </thead>
        <tbody>
            @foreach($amortization_table as $row)
                <tr>
                    <td>{{ $row['year'] }}</td>
                    <td>{{ number_format($row['payment'], 2) }}</td>
                    <td>{{ number_format($row['interest'], 2) }}</td>
                    <td>{{ number_format($row['principal'], 2) }}</td>
                    <td>{{ number_format($row['remaining_balance'], 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
</div>
@endsection
