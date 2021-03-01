@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Producto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Título *</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $product->title) }}" required>
                        </div>
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="file">
                        </div>
                        <div class="form-group">
                            <label>Descripción *</label>
                            <textarea name="description" rows="6" class="form-control" required>{{ old('description', $product->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido Embebido</label>
                            <textarea name="iframe" class="form-control">{{ old('iframe', $product->iframe) }}</textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
