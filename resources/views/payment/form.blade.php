@extends('layouts.app')

@section('title', 'Formulaire de Paiement')

@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6">Formulaire de Paiement</h1>
        <form action="{{ route('payment.process') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-700">Montant</label>
                <input type="number" name="amount" id="amount" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" step="0.01" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Payer avec Monetbil</button>
        </form>
    </div>
@endsection
