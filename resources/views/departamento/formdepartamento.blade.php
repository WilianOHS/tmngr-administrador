<h1> {{ $modo }} departamento</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>
        @foreach( $errors->all() as $error)
        <li> {{ $error }} </li>
    @endforeach
</ul>
    </div>

    

@endif


<div class="form-group">

<label for="Codigo">Codigo</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">

</div>
<div class="form-group">

<label for="Nombre">Nombre del departamento</label>
<input type="text" class="form-control" name="ApellidoPaterno" 
value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}"  id="ApellidoPaterno">
</div>

<div class="form-group">
<label for="Abreviacion">Abreviacion</label>
<input type="text" class="form-control" name="ApellidoMaterno" 
value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}"  id="ApellidoMaterno">
</div>



<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>

<br>