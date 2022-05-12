@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('invoices.create') }}" class="btn btn-md btn-success mb-3">TAMBAH INVOICE</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jatuh Tempo</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($invoices as $i)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $i->customer }}</td>
                                    <td>{{ date('d-m-Y', strtotime($i->tanggal_invoice)) }}</td>
                                    <td>{{ date('d-m-Y', strtotime($i->tanggal_jatuh_tempo)) }}</td>
                                    <td>{{ $i->deskripsi }}</td>
                                    <td class="text-center">
                                            <a href="{{ route('invoices.edit', $i->no) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
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
    
    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>  
@endsection