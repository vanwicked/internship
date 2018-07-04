@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Personas
                	@can('persona.create')
                	<a class="btn btn-primary pull-right" href="{{ route('personas.create') }}">Crear</a>

                	@endcan
                </div>
					
                <div class="card-body">
					<table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">Id</th>
                                <th>C.I.</th>
                                <th>Nombre</th>
                                <th>Ap Paterno</th>
                                <th>Ap Materno</th>
                                <th>Dirreccion</th>
                                <th colespan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($persona as $persona)
                            <tr>
                                <td>{{ $persona->idPersona }}</td>
                                <td>{{ $persona->dni }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->primerAp }}</td>
                                <td>{{ $persona->SegundoAp }}</td>
                                <td>{{ $persona->dirreccion }}</td>
                                <td>
                                    @can('persona.show')
                                        <a class="btn btn-info" role="button" href="{{ route('personas.show', $persona->idPersona) }}" 
                                        >Ver</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('persona.edit')
                                        <a class="btn btn-warning" role="button" href="{{ route('personas.edit', $persona->idPersona) }}" 
                                        >Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('persona.destroy')
                                        {!! Form::Open(['route' => ['personas.destroy', $persona->idPersona], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-danger">
                                                Eliminar
                                            </button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>               
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection