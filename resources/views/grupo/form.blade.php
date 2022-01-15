<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('Codigo', $grupo->Codigo, ['class' => 'form-control' . ($errors->has('Codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('Codigo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tema') }}
            {{ Form::text('Tema', $grupo->Tema, ['class' => 'form-control' . ($errors->has('Tema') ? ' is-invalid' : ''), 'placeholder' => 'Tema']) }}
            {!! $errors->first('Tema', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Docente_id') }}
            {{ Form::text('Docente_id', $grupo->Docente_id, ['class' => 'form-control' . ($errors->has('Docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Docente Id']) }}
            {!! $errors->first('Docente_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nroAcuerdoAprob') }}
            {{ Form::text('nroAcuerdoAprob', $grupo->nroAcuerdoAprob, ['class' => 'form-control' . ($errors->has('nroAcuerdoAprob') ? ' is-invalid' : ''), 'placeholder' => 'Nroacuerdoaprob']) }}
            {!! $errors->first('nroAcuerdoAprob', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('HorarioAses') }}
            {{ Form::text('HorarioAses', $grupo->HorarioAses, ['class' => 'form-control' . ($errors->has('HorarioAses') ? ' is-invalid' : ''), 'placeholder' => 'Horarioases']) }}
            {!! $errors->first('HorarioAses', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MesesDuracion') }}
            {{ Form::text('MesesDuracion', $grupo->MesesDuracion, ['class' => 'form-control' . ($errors->has('MesesDuracion') ? ' is-invalid' : ''), 'placeholder' => 'Mesesduracion']) }}
            {!! $errors->first('MesesDuracion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento_id') }}
            {{ Form::text('Departamento_id', $grupo->Departamento_id, ['class' => 'form-control' . ($errors->has('Departamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamento Id']) }}
            {!! $errors->first('Departamento_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera_id') }}
            {{ Form::text('Carrera_id', $grupo->Carrera_id, ['class' => 'form-control' . ($errors->has('Carrera_id') ? ' is-invalid' : ''), 'placeholder' => 'Carrera Id']) }}
            {!! $errors->first('Carrera_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>