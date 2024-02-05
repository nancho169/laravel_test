@extends('../layouts.frontend')

@section('content')

    <div class="card">
        <div class="card-header" style="text-align: center;">
            <p class="fs-3">ACCESO</p>
          </div>
          <div class="card-body bg-body-secondary">
    <form action="{{route('acceso_login_post')}}" method="POST" >
        <div class="form-group">
            <label for="correo">E-mail</label>
            <input type="text" class="form-control" id="correo" name="correo" value="{{old('correo')}}">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <hr>
        {{csrf_field()}}
        <input type="submit" value="Enviar" class="btn btn-primary">
     </form>
          </div>
    <x-flash />
    
@endsection