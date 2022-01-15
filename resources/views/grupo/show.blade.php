@extends('layouts.app')

@section('template_title')
    {{ $grupo->name ?? 'Show Grupo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Grupo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grupo.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $grupo->Codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Tema:</strong>
                            {{ $grupo->Tema }}
                        </div>
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $grupo->Docente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nroacuerdoaprob:</strong>
                            {{ $grupo->nroAcuerdoAprob }}
                        </div>
                        <div class="form-group">
                            <strong>Mesesduracion:</strong>
                            {{ $grupo->MesesDuracion }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $grupo->Departamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera Id:</strong>
                            {{ $grupo->Carrera_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
