@extends('layouts.master')

@section('content')
    <h1>Edit Data</h1>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="/invoices/{{ $invoices->no }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <label for="inputNumber">No<span class="required"> *</span></label>
                                    <input type="text" name="no" class="form-control" placeholder="0"
                                        value="{{ $invoices->no }}">
                                </div>
                                <div class="col-3">
                                    <label for="inputCustomer">Customer<span class="required">
                                            *</span></label>
                                    <input type="text" name="customer" class="form-control" placeholder="Select Customer"
                                        value="{{ $invoices->customer }}">
                                </div>
                                <div class="col-3">
                                    <label for="inputDate">Tanggal Invoice<span class="required">
                                            *</span></label>
                                    <input type="date" name="tanggal_invoice" class="form-control"
                                        placeholder="21 April 2022" value="{{ $invoices->tanggal_invoice }}">
                                </div>
                                <div class="col-3">
                                    <label for="inputDate">Jatuh Tempo<span class="required">
                                            *</span></label>
                                    <input type="date" name="tanggal_jatuh_tempo" class="form-control"
                                        placeholder="21 Mei 2022" value="{{ $invoices->tanggal_jatuh_tempo }}">
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-3">
                                    <label for="inputDate">Item<span class="required"> *</span></label>
                                    <input type="text" name="item" class="form-control" placeholder="Masukan nama item"
                                        value="{{ $invoices->item }}">
                                </div>
                                <div class="col-3">
                                    <label for="inputCustomer">Jumlah Produk<span class="required">
                                            *</span></label>
                                    <input type="text" name="qty" class="form-control" placeholder="0"
                                        value="{{ $invoices->qty }}">
                                </div>
                                <div class="col-2">
                                    <label for="inputHarga">Harga<span class="required">
                                            *</span></label>
                                    <input type="text" name="unit_price" class="form-control" placeholder="0.00"
                                        value="{{ $invoices->unit_price }}">
                                </div>
                                <div class="col-2">
                                    <label for="inputDiskon">Diskon<span class="required">
                                            *</span></label>
                                    <input type="text" name="diskon" class="form-control" placeholder="0%"
                                        value="{{ $invoices->diskon }}">
                                </div>
                                <div class="col-2">
                                    <label for="inputPajak">Pajak<span class="required">
                                            *</span></label>
                                    <input type="text" name="pajak" class="form-control" placeholder="0%"
                                        value="{{ $invoices->pajak }}">
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    <select class="form-select" name="status_invoice">
                                        <option selected>Status Invoice</option>
                                        <option value="Publish" @if ($invoices->status_invoice == 'Publish') selected @endif>Publish
                                        </option>
                                        <option value="Draft" @if ($invoices->status_invoice == 'Draft') selected @endif>Draft</option>
                                    </select>
                                </div>
                                <div class="col-sm-">
                                    <select class="form-select" name="status_payment_invoice">
                                        <option selected>Status Payment</option>
                                        <option value="Paid" @if ($invoices->status_payment_invoice == 'Paid') selected @endif>Paid</option>
                                        <option value="Unpaid" @if ($invoices->status_payment_invoice == 'Unpaid') selected @endif>Unpaid</option>
                                        <option value="Partial Paid" @if ($invoices->status_payment_invoice == 'PartialPaid') selected @endif>Partial Paid</option>
                                    </select>
                                </div>
                            </div>
                            <br>

                            <div class="mb-6">
                                <label for="Textarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="Textarea1" rows="3">{{ $invoices->deskripsi }}</textarea>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
