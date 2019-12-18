@extends('barang.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New barang</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('barang.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Barang:</strong>
                <input type="text" name="id_barang" class="form-control" placeholder="id_barang">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang:</strong>
                <input type="text" name="nama" class="form-control" placeholder="nama">
            </div>
        </div>
        
  </button>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Distributor</strong>
                  <select class="form-control" name="id_distributor">
                  <?php foreach ($dis as $dis) {?>
                  <option value="{{$dis->id_distributor}}"> {{$dis->distributor}}  </option>
                  <?php } ?>
                  </select>
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div> 
</form>
@endsection