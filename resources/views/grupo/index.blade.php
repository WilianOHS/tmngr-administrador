@extends('layouts.app')

@section('template_title')
    Grupo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Grupo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('grupo.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
										<th>Tema</th>
										<th>Docente Id</th>
										<th>Nroacuerdoaprob</th>
										<th>Mesesduracion</th>
										<th>Departamento Id</th>
										<th>Carrera Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grupos as $grupo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $grupo->Codigo }}</td>
											<td>{{ $grupo->Tema }}</td>
											<td>{{ $grupo->Docente_id }}</td>
											<td>{{ $grupo->nroAcuerdoAprob }}</td>
											<td>{{ $grupo->MesesDuracion }}</td>
											<td>{{ $grupo->Departamento_id }}</td>
											<td>{{ $grupo->Carrera_id }}</td>

                                            <td>
                                                <form action="{{ route('grupo.destroy', ['grupo'=>$grupo->Codigo]) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('grupo.show',$grupo->Codigo) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('grupo.edit',$grupo->Codigo) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $grupos->links() !!}
            </div>
        </div>
    </div>
@endsection
