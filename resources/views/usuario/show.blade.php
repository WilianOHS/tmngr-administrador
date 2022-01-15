@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuario.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $usuario->Codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Abreviatura:</strong>
                            {{ $usuario->Abreviatura }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $usuario->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $usuario->Apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Dui:</strong>
                            {{ $usuario->DUI }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $usuario->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $usuario->Carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera Id:</strong>
                            {{ $usuario->Carrera_id }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuario->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $usuario->Departamento_id }}
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
