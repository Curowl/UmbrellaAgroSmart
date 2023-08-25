@extends('layouts.app')

@section('extra-css')
@endsection

@section('head')
<div class="container text-center pt-5">
    <h1 >Detalles del Proveedor</h1>
</div>
@endsection

@section('content')
<div class="container mb-5" style="width: 60%;">
    <form method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nit" class="form-label">Cedula / NIT</label>

            <input id="nit" type="numeric" class="form-control @error('nit') is-invalid @enderror" name="nit" value="{{ $provider->nit}}" readonly autocomplete="nit" autofocus>

            @error('nit')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="name" class="form-label">Nombre del Proveedor</label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $provider->name }}" readonly autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="contact" class="form-label ">Nombre de Contacto</label>

            <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $provider->contact_name }}" readonly autocomplete="contact" autofocus>

            @error('contact')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="email" class="form-label ">Email</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $provider->email }}" readonly autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="form-group mb-3">
            <label for="phone" class="form-label ">Telefono</label>

            <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $provider->phone }}" readonly autocomplete="phone" autofocus>

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="text-center form-group mt-3 mb-3">
            <div class="col-md-6 offset-md-4">
                <a href="{{route('provider.index')}}" class="btn btn-danger">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection

@section('extra-js')
@endsection