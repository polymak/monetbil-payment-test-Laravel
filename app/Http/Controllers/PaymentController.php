<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment.form');
    }

    public function processPayment(Request $request)
    {
        $amount = $request->input('amount');
        $serviceKey = env('MONETBIL_SERVICE_KEY');
        $notifyUrl = env('MONETBIL_NOTIFY_URL');
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('MONETBIL_SERVICE_SECRET'), // Si nécessaire pour l'authentification
        ])->post("https://api.monetbil.com/widget/v2.1/{$serviceKey}", [
            'amount' => $amount,
            'notify_url' => $notifyUrl,
            'return_url' => route('payment.success')
        ]);

        $data = $response->json();

        if ($data['success']) {
            return redirect($data['payment_url']);
        }

        return back()->withErrors('Une erreur est survenue lors de la génération du lien de paiement.');
    }

    public function paymentSuccess()
    {
        return view('payment.success');
    }

    public function paymentNotify(Request $request)
    {
        // Logique pour traiter la notification de paiement
        // Exemple : $paymentStatus = $request->input('status');
        
        return response()->json(['status' => 'Notification reçue']);
    }
}
