@extends('layouts.app')

@section('template_title')
    {{ $carrera->name ?? 'Show Carrera' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Carrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carrera.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Carrera:</strong>
                            {{ $carrera->id_carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $carrera->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $carrera->departamento_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
