<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $invoices = Invoice::query()
        ->paginate(5);
    
        return view('invoices.index', compact('invoices'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        // dd($request->except(['_token']));
        Invoice::create([
            'no' => $request->no,
            'customer' => $request->customer,
            'tanggal_invoice' => $request->tanggal_invoice,
            'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
            'item' => $request->item,
            'qty' => $request->qty,
            'unit_price' => $request->unit_price,
            'diskon' => $request->diskon,
            'pajak' => $request->pajak,
            'status_invoice' => $request->status_invoice,
            'status_payment_invoice' => $request->status_payment_invoice,
            'deskripsi' => $request->deskripsi,

        ]);
            return redirect()->route('invoices.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($no)
    {
        $invoices = Invoice::find($no);
        return view('invoices.edit', compact(['invoices']));
    }

    public function update($no, Request $request)
    {
        $invoices = Invoice::find($no);
        $invoices->update([
            'no' => $request->no,
            'customer' => $request->customer,
            'tanggal_invoice' => $request->tanggal_invoice,
            'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
            'item' => $request->item,
            'qty' => $request->qty,
            'unit_price' => $request->unit_price,
            'diskon' => $request->diskon,
            'pajak' => $request->pajak,
            'status_invoice' => $request->status_invoice,
            'status_payment_invoice' => $request->status_payment_invoice,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('invoices.index');
    }
}
