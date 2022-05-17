@extends('layouts.master')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('invoices.store') }}" method="POST">
                        @csrf
                        <div class="col-12">
                            <label for="inputDate">Item<span class="required"> *</span></label>
                            <input type="text" name="item" class="form-control" placeholder="Masukan nama item">
                        </div><br>
                        <div class="col-12">
                            <label for="inputCustomer">Jumlah Produk<span class="required">
                                    *</span></label>
                            <input type="text" name="qty" class="form-control" placeholder="0">
                        </div><br>
                        <div class="col-12">
                            <label for="inputHarga">Harga<span class="required">
                                    *</span></label>
                            <input type="text" name="unit_price" class="form-control" placeholder="0.00">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-md btn-primary ml-3">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection
