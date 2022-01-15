<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('Codigo', $usuario->Codigo, ['class' => 'form-control' . ($errors->has('Codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('Codigo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Abreviatura') }}
            {{ Form::text('Abreviatura', $usuario->Abreviatura, ['class' => 'form-control' . ($errors->has('Abreviatura') ? ' is-invalid' : ''), 'placeholder' => 'Abreviatura']) }}
            {!! $errors->first('Abreviatura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Nombres', $usuario->Nombres, ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('Apellidos', $usuario->Apellidos, ['class' => 'form-control' . ($errors->has('Apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DUI') }}
            {{ Form::text('DUI', $usuario->DUI, ['class' => 'form-control' . ($errors->has('DUI') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('DUI', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $usuario->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::text('Carrera', $usuario->Carrera, ['class' => 'form-control' . ($errors->has('Carrera') ? ' is-invalid' : ''), 'placeholder' => 'Carrera']) }}
            {!! $errors->first('Carrera', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera_id') }}
            {{ Form::text('Carrera_id', $usuario->Carrera_id, ['class' => 'form-control' . ($errors->has('Carrera_id') ? ' is-invalid' : ''), 'placeholder' => 'Carrera Id']) }}
            {!! $errors->first('Carrera_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $usuario->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento_id') }}
            {{ Form::text('Departamento_id', $usuario->Departamento_id, ['class' => 'form-control' . ($errors->has('Departamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamento Id']) }}
            {!! $errors->first('Departamento_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Password') }}
            {{ Form::text('Password', $usuario->Password, ['class' => 'form-control' . ($errors->has('Password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
            {!! $errors->first('Password', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>