@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <h3>Data Buku Perpustakaan</h3>
 <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('create') }}" class="btn btn-primary btn-xs pull-right">Tambah Buku Baru</a>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Nama Penerbit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $book->judul_buku }}</td>
                                    <td>{{ $book->pencipta_buku_by_id }}</td>
                                    <td>
                                       
                                          <a href="{{ route('edit', $book->id) }}" class="btn btn-success btn-xs">Edit</a> 
                                         <a href="{{ route('delete', $book->id) }}" class="btn btn-success btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                    </td>
                                </tr>  
                                $no                          
                            @endforeach     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
            </div>
            
        </div>
    </div>
</div>
@endsection


@section('style')
    <link rel="stylesheet" href="{{ url('css/dataTables.bootstrap.css') }}">
@stop

@section('script')
    <script src="{{ url('js/jquery.dataTables.js') }}"></script>
    <script src="{{ url('js/dataTables.bootstrap.js') }}"></script>
    <script>
        $(window).ready(function(){
            $('table').DataTable();
        });
    </script>
@stop
