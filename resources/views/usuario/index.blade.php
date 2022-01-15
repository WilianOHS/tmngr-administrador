@extends('layouts.app')

@section('template_title')
    Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuario.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Usuario') }}
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
                                        
										<th>Codigo</th>
										<th>Abreviatura</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Dui</th>
										<th>Tipo</th>
										<th>Carrera</th>
										<th>Carrera Id</th>
										<th>Correo</th>
										<th>Departamento Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usuario->Codigo }}</td>
											<td>{{ $usuario->Abreviatura }}</td>
											<td>{{ $usuario->Nombres }}</td>
											<td>{{ $usuario->Apellidos }}</td>
											<td>{{ $usuario->DUI }}</td>
											<td>{{ $usuario->Tipo }}</td>
											<td>{{ $usuario->Carrera }}</td>
											<td>{{ $usuario->Carrera_id }}</td>
											<td>{{ $usuario->Correo }}</td>
											<td>{{ $usuario->Departamento_id }}</td>

                                            <td>
                                                <form action="{{ route('usuario.destroy',['usuario'=>$usuario->Codigo]) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usuario.show',$usuario->Codigo) }}"><i class="fa fa-fw fa-eye"></i> Ver Usuario</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usuario.edit',$usuario->Codigo) }}"><i class="fa fa-fw fa-edit"></i> Editar Usuario</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar Usuario</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
