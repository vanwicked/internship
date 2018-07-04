@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Persona</div>

                <div class="card-body">
                    <p><strong>C.I:</strong>{{ $persona->dni }}</p>
                    <p><strong>Nombre:</strong>{{ $persona->nombre }}</p>
                    <p><strong>Apellido Paterno:</strong>{{ $persona->primerAp }}</p>
                    <p><strong>Apellido Materno:</strong>{{ $persona->SegundoAp }}</p>
                    <p><strong>dirreccion:</strong>{{ $persona->dirreccion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection