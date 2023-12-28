@extends('../layouts.frontend')

@section('content')
<h1>BD m</h1>
<x-flash />
<form action="{{route('bd_productos_edit_post',['id'=>$producto->id])}}" method="POST">


    <div class="form-group">
        <label for="categorias_id">Categorías:</label>
        <select name="categorias_id" id="categorias_id" class="form-control">
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}"
                    {{($producto->categorias_id==$categoria->id) ? 'selected':''}}>
                    {{$categoria->nombre}}
                </option>
            @endforeach
        </select>

    </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" />
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}"  
        onkeypress="return soloNumeros(event)"/>
    </div>
    <div class="form-group">
        <label for="stock">Stock:</label>
        <select name="stock" id="stock" class="form-control">
            @for($i=0; $i<=100; $i++)
                <option value='{{$i}}' {{($producto->stock==$i) ? 'selected="true"':''}}>{{$i}}</option>
            @endfor
        </select>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea type="text" name="descripcion" id="descripcion" class="form-control" value=""  
        >{{ $producto->descripcion }}</textarea>
        

    </div>
    <hr>
    {{ csrf_field() }}
    <input type="submit" name="" value="enviar" id="" class="btn btn-primary">
</form>
@endsection