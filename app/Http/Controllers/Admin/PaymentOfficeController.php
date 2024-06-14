<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\PaymentOffice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePaymentOfficeRequest;
use App\Http\Requests\UpdatePaymentOfficeRequest;

class PaymentOfficeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::first();
       
        $cities = City::where('country_id' , $country->id)->get();
        $paymentOffices = PaymentOffice::orderBy("updated_at", "DESC")->get();
        return view("content.payment_offices.index", compact("paymentOffices" , "country"  , "cities"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("content.payment_offices.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentOfficeRequest $request)
    {
        $validated = $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store("/payment_offices", "public");
            $validated["image_path"] = $imagePath;
        }

        $paymentOffice = PaymentOffice::create($validated);

        return redirect()->route('settings.payment-offices.index')->with("success", "Payment office successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentOffice = PaymentOffice::find($id);
        return view("content.payment_offices.show", compact("paymentOffice"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentOffice = PaymentOffice::find($id);
        return view("content.payment_offices.edit", compact("paymentOffice"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentOfficeRequest $request, $id)
    {
   
        $validated = $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store("/payment_offices", "public");
            $validated["image_path"] = $imagePath;
        }

        $paymentOffice = PaymentOffice::find($id);
        $paymentOffice->fill($validated);
        $paymentOffice->save();

        return redirect()->route('settings.payment-offices.index')->with("success", "Payment office successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paymentOffice = PaymentOffice::find($id);

        // Delete Image
        if ($paymentOffice->image_path)
            Storage::delete($paymentOffice->image_path);

        $paymentOffice->delete();

        return back()->with("success", "Payment office successfully deleted.");
    }

    public function deleteOfficeImage($id)
    {
        $paymentOffice = PaymentOffice::find($id);
        if ($paymentOffice && isset($paymentOffice->image_path)) {
            $path = public_path('storage/' . $paymentOffice->image_path);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $paymentOffice->image_path = null;
            $paymentOffice->save();
        }
        
        return [
            'status' => true
        ];
    }
}
