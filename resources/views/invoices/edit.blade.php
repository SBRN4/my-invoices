@extends('layouts.master')

@section('content')
    <h1>Edit Data</h1>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('invoices.store') }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <label for="inputNumber">No<span class="required"> *</span></label>
                                    <input type="text" name="no" class="form-control" placeholder="0">
                                </div>
                                <div class="col-3">
                                    <label for="inputCustomer">Customer<span class="required">
                                            *</span></label>
                                    <input type="text" name="customer" class="form-control" placeholder="Select Customer">
                                </div>
                                <div class="col-3">
                                    <label for="inputDate">Tanggal Invoice<span class="required">
                                            *</span></label>
                                    <input type="date" name="tanggal_invoice" class="form-control"
                                        placeholder="21 April 2022">
                                </div>
                                <div class="col-3">
                                    <label for="inputDate">Jatuh Tempo<span class="required">
                                            *</span></label>
                                    <input type="date" name="tanggal_jatuh_tempo" class="form-control"
                                        placeholder="21 Mei 2022">
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-3">
                                    <label for="inputDate">Item<span class="required"> *</span></label>
                                    <input type="text" name="item" class="form-control" placeholder="Masukan nama item">
                                </div>
                                <div class="col-3">
                                    <label for="inputCustomer">Jumlah Produk<span class="required">
                                            *</span></label>
                                    <input type="text" name="jumlah_produk" class="form-control" placeholder="0">
                                </div>
                                <div class="col-2">
                                    <label for="inputHarga">Harga<span class="required">
                                            *</span></label>
                                    <input type="text" name="harga" class="form-control" placeholder="0.00">
                                </div>
                                <div class="col-2">
                                    <label for="inputDiskon">Diskon<span class="required">
                                            *</span></label>
                                    <input type="text" name="diskon" class="form-control" placeholder="0%">
                                </div>
                                <div class="col-2">
                                    <label for="inputPajak">Pajak<span class="required">
                                            *</span></label>
                                    <input type="text" name="pajak" class="form-control" placeholder="0%">
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    <select class="form-select" name="status_invoice">
                                        <option selected>Status Invoice</option>
                                        <option value="Publish">Publish</option>
                                        <option value="Draft">Draft</option>
                                    </select>
                                </div>
                                <div class="col-sm-">
                                    <select class="form-select" name="status_payment_invoice">
                                        <option selected>Status Payment</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                        <option value="Partial Paid">Partial Paid</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                    
                            <div class="mb-6">
                                <label for="Textarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="Textarea1" rows="3"></textarea>
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