@extends('layouts.app')

@section('title', 'Bienvenue sur Monetbil Payment')

@section('content')
    <div class="container mx-auto mt-10 px-4">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-900">Bienvenue sur notre Système de Paiement Monetbil</h1>
            <p class="mt-4 text-lg text-gray-600">Nous facilitons les paiements en ligne avec une solution moderne et sécurisée.</p>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pourquoi choisir Monetbil ?</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Transactions sécurisées et rapides.</li>
                <li>Support de multiples devises et opérateurs.</li>
                <li>Facilité d'intégration avec une API moderne.</li>
            </ul>
        </div>

        <div class="text-center">
            <a href="{{ route('payment.form') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Accéder au Formulaire de Paiement</a>
        </div>
    </div>
@endsection
