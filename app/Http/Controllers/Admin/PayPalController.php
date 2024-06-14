<?php
  
namespace App\Http\Controllers\Admin;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
   
class PayPalController extends Controller
{
    protected $provider;
  
    public function __construct()
    {
        $this->provider = new PayPalClient;
    }

    public function payment()
    {
        dd(get_class_methods($this->provider));
        $data = [];
        $data['items'] = [
            [
                'name' => 'ItSolutionStuff.com',
                'price' => 100,
                'desc'  => 'Description for ItSolutionStuff.com',
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 100;
  
        $response = $this->provider->createPartnerReferral($data);
        dd($response);
        return redirect($response['paypal_link']);
    }
   
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
  
    public function success(Request $request)
    {
        $response = $this->provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successful. You can create success page here.');
        }
  
        dd('Something went wrong.');
    }
}
