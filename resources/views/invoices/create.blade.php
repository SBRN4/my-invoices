@extends('layouts.master')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('invoices.store') }}" method="POST">
                            @csrf
                            <h2 style="font-family: fantasy">Create Invoice</h2>
                            <div class="form-row">
                                <div class="col-3">
                                    <label for="inputNumber">No</label>
                                    <input type="text" name="no" class="form-control" placeholder="0">
                                </div>
                                <div class="col-3">
                                    <label for="inputCustomer">Customer</label>
                                    <input type="text" name="customer" class="form-control" placeholder="Select Customer">
                                </div>
                                <div class="col-3">
                                    <label for="inputDate">Tanggal Invoice</label>
                                    <input type="date" name="tanggal_invoice" class="form-control"
                                        placeholder="21 April 2022">
                                </div>
                                <div class="col-3">
                                    <label for="inputDate">Jatuh Tempo</label>
                                    <input type="date" name="tanggal_jatuh_tempo" class="form-control"
                                        placeholder="21 Mei 2022">
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-4">
                                    <label for="inputDiskon">Diskon</label>
                                    <input type="text" name="diskon" class="form-control" placeholder="0%">
                                </div>
                                <div class="col-4">
                                    <label for="inputPajak">Pajak</label>
                                    <input type="text" name="pajak" class="form-control" placeholder="0%">
                                </div>
                                <div class="col-2">
                                    <label for="inputStatus">Status Invoice</label>
                                    <select class="custom-select" name="status_invoice">
                                        <option selected>Select Invoice</option>
                                        <option value="Publish">Publish</option>
                                        <option value="Draft">Draft</option>
                                      </select>
                                </div>
                                <div class="col-2">
                                    <label for="inputPayment">Status Payment</label>
                                    <select class="custom-select" name="status_payment_invoice">
                                        <option selected>Select Payment</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                        <option value="Partial Paid">Partial Paid</option>
                                      </select>
                                </div>
                            </div> <br>
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
