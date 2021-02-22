@extends('app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Productos
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection