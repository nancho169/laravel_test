@extends('../layouts.frontend')

@section('content')
<h1>BD m</h1>
<x-flash />
<form action="{{route('bd_categorias_edit_post',['id'=>$categorias->id])}}" method="POST">


    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="from-control" value="{{ $categorias->nombre }}" />
    </div>
    <hr>
    {{ csrf_field() }}
    <input type="submit" name="" value="enviar" id="" class="btn btn-primary">
</form>
@endsection