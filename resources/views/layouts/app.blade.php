<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-semibold">Monetbil Payment</a>
            <div>
                <a href="{{ route('payment.form') }}" class="px-4 py-2 hover:bg-gray-700 rounded">Formulaire de Paiement</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
        <p>&copy; {{ date('Y') }} Monetbil Payment. Tous droits réservés.</p>
    </footer>
</body>
</html>
