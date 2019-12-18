@extends('barang.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Barang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Id Distributor</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($distributor as $barang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $barang->id_barang }}</td>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->id_distributor }}</td>  
            <td>{{ $barang->keterangan }}</td>
            <td>
                <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">
   
                    <a class="btn btn-warning" href="{{ route('barang.show',$barang->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  

      
@endsection