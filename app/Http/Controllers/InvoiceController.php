<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Attachment;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    
    {
        //
        return view('invoices.invoice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        
        // dd($request);
        // $request->validate([
        //     'invoice_no' => ['required', 'string', 'max:7','unique:invoices'],
        //     'attachments' => ['required', 'max:255'],
        
        // ]);

        $invoice = invoice::create([
            'invoice_no' => $request->invoice_no,
 
            'amount' => $request->amount,

            // 'attachments' => $request->attachments
        ]);

        $file = $request->file('file');

        // dd($file);
        $destinationPath = "upload";
        $fileName = "image1";

        // dd($request);
        if($file->move($destinationPath, $fileName)){

            echo "file uplad success";
        }
        else{
            echo "some thing went wrong";
        }

        $attachment = $invoice->attachment()->create([
            'file' => $request->attachment,
        ]);

        $product = $invoice->products()->create([
            'name' => $request->products,
        ]);

        dd($invoice);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }

    public function getAttachment(){
        $invoice = Invoice::find(10);

        return $invoice->attachment();
    }
}
