@extends('../layouts.frontend')

@section('content')
<p class="fs-1">AGREGAR CATEGORÍA</p>
<x-flash />
<form action="{{route('bd_categorias_add_post')}}" method="POST" >


    <div class="form-group bg-body-secondary" >
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="from-control" value="{{ old('nombre') }}" />
    </div>
    <hr>
    {{ csrf_field() }}
    <input type="submit" name="" value="enviar" id="" class="btn btn-primary">
</form>
@endsection