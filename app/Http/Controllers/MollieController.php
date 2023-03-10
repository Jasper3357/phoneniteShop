<?php

namespace App\Http\Controllers;

class MollieController extends Controller
{
    public function __construct()
    {
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey('test_exCBUrT86skf2vBb2Wbwdf9hErQSqC');
    }

    public function preparePayment()
    {
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey('test_exCBUrT86skf2vBb2Wbwdf9hErQSqC');
        
        $payment = $mollie->payments()->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => '10.00'
            ],
            'description' => 'Phonenite order',
            'redirectUrl' => route('payment.success'),
        ]);

        $payment = $mollie->payments()->get($payment->id);

        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function paymentSuccess()
    {
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey('test_exCBUrT86skf2vBb2Wbwdf9hErQSqC');

        if ($payment->isPaid())
        {
            echo "Payment received.";
        }
    }
}

