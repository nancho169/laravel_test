@extends('../layouts.frontend')

@section('content')
    <h1>Fotos del producto: {{ $producto->nombre }}</h1>
    <x-flash />
    <form action="{{route('bd_productos_fotos_post',['id'=>$producto->id])}}" method="post" name="form" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group izquierda">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
    </div>
    {{csrf_field()}}
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>
    <hr>
    <div class="row">
        <table class="table table-bodered">
            <thead>
                <tr>
                    <th>
                        Foto
                    </th>
                    <th>
                        Accciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($fotos as $foto)
                    <tr>
                        <td>
                            <a data-fancybox="gallery" data-src="{{ asset('upload/producto') }}/{{$foto->nombre}}">
                                <img src="{{ asset('upload/producto') }}/{{$foto->nombre}}" width="200" height="200" alt="">
                              </a>
                            
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="confirmaAlert('realmente desea eliminar este registro?','{{ route('bd_productos_fotos_delete',['producto_id'=>$producto->id,'foto_id'=>$foto->id])}}')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('fancybox/fancybox.css')}}" />
    <!--<link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
          />-->
@endpush
@push('js')
    <script src="{{ asset('fancybox/fancybox.js') }}"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>-->
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
          //
        });    
      </script>
@endpush