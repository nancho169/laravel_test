@extends('../layouts.frontend')

@section('content')
<h1>Productos por categoria ({{ $datos->count() }})</h1>
<h3>Categoría: {{ $categoria->nombre }}</h3>
<x-flash />
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
                    <tr>
                        <td>
                            {{ $dato->id}}
                        </td>
                        <td>
                            {{ $dato->nombre}}
                        </td>
                        <td>
                            <a href="{{ route('bd_categorias_edit',['id'=>$dato->id])}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" onclick="confirmaAlert('¿Realmente desea eliminar este registro?','{{ route('bd_categorias_delete',['id'=>$dato->id])}}')">
                                <i class="fas fa-trash"></i>
                                
                            </a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection