@extends('distributor.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Distributor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('distributor.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id Distributor</th>
            <th>Distributor</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($distributors as $distributor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $distributor->id_distributor }}</td>
            <td>{{ $distributor->distributor }}</td>
            <td>
                <form action="{{ route('distributor.destroy',$distributor->id) }}" method="POST">
   
                    <a class="btn btn-warning" href="{{ route('distributor.show',$distributor->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('distributor.edit',$distributor->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $distributors->links() !!}
      
@endsection