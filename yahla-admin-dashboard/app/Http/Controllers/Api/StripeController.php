<?php

namespace App\Http\Controllers\Api;

use Stripe\Stripe;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{
    public function index(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $description = 'Account Upgrade';

        $transaction_id = 'YK' . mt_rand(100000000, 999999999);

        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => env('STRIPE_CURRENCY'),
                        'unit_amount' => $request->amount * 100,
                        'product_data' => [
                            'name' => $description,
                        ],
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => url('/api/stripe/update-transaction') . '?transaction_id=' . $transaction_id,
            'cancel_url' => url('/api/error'),
        ]);

        $payment = new Payment;
        $payment->payment_id = $checkoutSession->id;
        $payment->payer_id = mt_rand(100000000, 999999999);
        $payment->payer_email = $request->email;
        $payment->amount = $request->amount;
        $payment->currency = env('STRIPE_CURRENCY');
        $payment->payment_status = $checkoutSession->payment_status;
        $payment->type = 'stripe';
        $payment->transaction_id = $transaction_id;
        $payment->status = 0;
        $payment->user_id = $request->user_id;
        $payment->level = $request->level;
        $payment->save();

        return response()->json(['success' => true, 'data' => $checkoutSession->url]);
    }

    public function update(Request $request)
    {
        $payment = Payment::where('transaction_id', $request->transaction_id)->first();
        if(isset($payment->user_id)){
            $user = User::find($payment->user_id);
            $user->level = $payment->level;
            $user->save();
        }
        $payment->payment_status = 'approved';
        $payment->status = 1;
        $payment->save();

        return redirect('/api/stripe/update-success' . '?payment_id=' . $payment->payment_id);
    }

    public function success()
    {
        return view('content.paypal.success');
    }
}
