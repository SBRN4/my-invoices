@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-14">
                <div class="card border-0 shadow rounded">
                    <div class="card" style="width: 70rem">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 ml-2">
                                    <h2 style="font-family: fantasy">DAFTAR INVOICE</h2>
                                </div>
                                <div class="col">
                                    <a href="{{ route('invoices.create') }}" class="btn btn-md btn-success mb-3"
                                        style="float: right">TAMBAH INVOICE</a>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Tanggal Invoice</th>
                                        <th scope="col">Jatuh Tempo</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($invoices as $i)
                                        <tr>
                                            <th scope="row">
                                                <a href="/rincian">{{ $loop->index + 1 }}</a>
                                            </th>
                                            <td>{{ $i->customer }}</td>
                                            <td>{{ date('l, d F Y', strtotime($i->tanggal_invoice)) }}</td>
                                            <td>{{ date('l, d F Y', strtotime($i->tanggal_jatuh_tempo)) }}</td>
                                            <td>{{ $i->deskripsi }}</td>
                                            <td>
                                                <a href="{{ route('invoices.edit', $i->id) }}"><i class="fas fa-edit"></i></a>
                                                <form action="/invoices/{{ $i->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" value="delete" style="border: none"><i class="fas fa-trash" style="color:red"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $invoices->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
