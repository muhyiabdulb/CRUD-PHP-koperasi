@extends('distributor.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Distributor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('distributor.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Distributor :</strong>
                {{ $distributor->id_distributor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Distributor :</strong>
                {{ $distributor->distributor }}
            </div>
        </div>
    </div>

@endsection 