<?php

namespace App\Http\Controllers;

use App\Models\invoice_product;
use App\Http\Requests\Storeinvoice_productRequest;
use App\Http\Requests\Updateinvoice_productRequest;

class InvoiceProductController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeinvoice_productRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinvoice_productRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoice_product  $invoice_product
     * @return \Illuminate\Http\Response
     */
    public function show(invoice_product $invoice_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoice_product  $invoice_product
     * @return \Illuminate\Http\Response
     */
    public function edit(invoice_product $invoice_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinvoice_productRequest  $request
     * @param  \App\Models\invoice_product  $invoice_product
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinvoice_productRequest $request, invoice_product $invoice_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoice_product  $invoice_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice_product $invoice_product)
    {
        //
    }
}
