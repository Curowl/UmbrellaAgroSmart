@extends('layouts.app')

@section('extra-css')
@endsection

@section('head')
<div class="container text-center pt-5">
    <h1 >Nuevos Productos</h1>
</div>
@endsection

@section('content')
<div class="container mb-5" style="width: 60%;">
    <form method="POST" action="{{ route('product.store') }} " enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="code" class="form-label">Codigo</label>

            <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

            @error('code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="name" class="form-label ">Nombre</label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label ">Descripcion</label>

            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="category" class="form-label ">Categoria</label>

            <select class="form-select" name="category" id="category" required>
                <option value="" selected>Seleccione una categoria</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="brand" class="form-label ">Marca</label>

            <select class="form-select" name="brand" id="brand" required>
                <option value="" selected>Seleccione una categoria</option>
                @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>

            @error('brand')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="photo" class="form-label">Imagen Descriptiva</label>
            <input id="photo" type="file" class="form-control" name="photo"  autocomplete="photo">  
        </div>
        <div class="d-flex justify-content-center">
            <img  src="" alt="" style="display: none; width:100px; height:100px;" id="preview_img" class="mt-2">
        </div>

        <div class="text-center form-group mt-3 mb-3">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{route('product.index')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection

@section('extra-js')
    @if(session('success'))
            <script>    
                Swal.fire(
                'Exito!',
                '{{ session('success') }}',
                'success'
                )
            </script>
    @endif
    @if(session('error'))
        <script>    
            Swal.fire(
            'Algo ha salido mal!',
            '{{ session('error') }}',
            'error'
            )
        </script>
    @endif

    <!-- Preview of the uploaded image-->
    <script>
    $(document).ready(async function() {
        let evidencia = $('#photo');
        let preview = $('#preview_img');

        evidencia.change(function(){
            let file = this.files[0];
            if (file == null) {
                    preview.hide();
                    preview.attr('src', '');
            }else{
                preview.show();
                preview.attr('src', URL.createObjectURL(file));
            }
        });
        });
    </script>
@endsection