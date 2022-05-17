@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <h2 style="font-family: fantasy;">DAFTAR INVOICE</h2>
                            </div>
                            <div class="col">
                                <a href="{{ route('invoices.create') }}" class="btn btn-md btn-success mb-3"
                                    style="float: right">TAMBAH INVOICE</a>
                            </div>

                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jatuh Tempo</th>
                                    <th scope="col">Status Invoice</th>
                                    <th scope="col">Status Payment</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($invoices as $i)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $i->customer }}</td>
                                        <td>{{ date('d-m-Y', strtotime($i->tanggal_invoice)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($i->tanggal_jatuh_tempo)) }}</td>
                                        <td>{{ $i->status_invoice }}</td>
                                        <td>{{ $i->status_payment_invoice }}</td>
                                        <td>{{ $i->deskripsi }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('invoices.edit', $i->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            <form action="/invoices/{{ $i->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger" value="delete">HAPUS</button>
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
                        {{-- {{ $invoices->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @else
            if (session() - > has('error'))
                toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
@endsection
