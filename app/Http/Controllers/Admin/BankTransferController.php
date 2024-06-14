<?php

namespace App\Http\Controllers\Admin;

use App\Models\BankTransfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BankTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = BankTransfer::orderBy('id' , 'desc')->get();
        return view('content.bank-transfer.index' , compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bank_name' => 'required',
            'account_holder_name' => 'required',
        ]);

        $bank  = new BankTransfer();
        $bank->bank_name = $request->bank_name;
        $bank->account_holder_name = $request->account_holder_name;
        $bank->account_no = $request->account_no;
        $bank->iban_no  = $request->iban_no;

        if($bank->save()){
            return redirect()->route('settings.bank-transfer.index')->with('success' , 'Bank Created Successfully.');
        }else{
            return redirect()->route('settings.bank-transfer.index')->with('success' , 'Failed to Create Bank.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bank = BankTransfer::find($id);
        $bank->bank_name = $request->bank_name;
        $bank->account_holder_name = $request->account_holder_name ;
        $bank->account_no = $request->account_no;
        $bank->iban_no = $request->iban_no;

        if($bank->update()){
            return redirect()->route('settings.bank-transfer.index')->with('success'  , 'Bank Account updated successfully');
        }else{
            return redirect()->route('settings.bank-transfer.index')->with('error' , 'Failed to update bank account.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bank = BankTransfer::find($id);
        if($bank->delete($bank->id)){
            return redirect()->route('settings.bank-transfer.index')->with('success' , 'Account has been deleted successfully.');
        }else{
            return redirect()->route('settings.bank-transfer.index')->with('error' , 'Failed to delete account.');
        }
    }
}
