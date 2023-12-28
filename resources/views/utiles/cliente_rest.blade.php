@extends('../layouts.frontend')

@section('content')
    <h1>Cliente Rest </h1>
    <h2>Status : {{ $status }}</h2>
    <p>{{$json}}</p>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>    
                <th>Precio</th>    
                <th>Descripción</th>    
            </tr>    
        </thead>
        <tbody>
            <?php
            foreach ($datos as $dato) {
                ?>
                <tr>
                    <td><?php echo $dato->nombre;?></td>
                    <td><?php echo $dato->precio;?></td>
                    <td><?php echo $dato->descripcion;?></td>
                </tr>
                <?php
            }
            ?>
            
        </tbody>
    </table>
    <x-flash />
    
@endsection