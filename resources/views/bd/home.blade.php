@extends('../layouts.frontend')

@section('content')
<p class="fs-1">PRODUCTOS</p>
    <ul>
        <li>
         <a href="{{ route('bd_categorias')}}">Categorías</a>

        </li>
        <li>
            <a href="{{ route('bd_productos')}}">Productos</a>
            
           </li>

           <li>
            <a href="{{ route('bd_productos_paginacion')}}">Paginación</a>
            
           </li>
           
           <li>
            <a href="{{ route('bd_productos_buscador')}}">Buscador</a>
            
           </li>
    </ul>
    <x-flash />
    
@endsection