@extends('layouts.app')

@section('template_title')
    Carrera
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carrera') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('carrera.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva carrera') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Carrera</th>
										<th>Nombre</th>
										<th>Departamento Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carreras as $carrera)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $carrera->id_carrera }}</td>
											<td>{{ $carrera->nombre }}</td>
											<td>{{ $carrera->departamento_id }}</td>

                                            <td>
                                                <form action="{{ route('carrera.destroy',['carrera'=>$carrera->id_carrera])}}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('carrera.show',$carrera->id_carrera) }}"><i class="fa fa-fw fa-eye"></i> Ver Carrera</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('carrera.edit',$carrera->id_carrera) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $carreras->links() !!}
            </div>
        </div>
    </div>
@endsection
