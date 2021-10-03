
@section('content')
<div class="container">

<form action="{{ url('/departamento') }}" method="post" enctype="multipart/form-data">
@csrf
@include('departamento.formdepartamento',['modo'=>'Crear']);


</form>
</div>
@endsection