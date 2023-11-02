@extends('../layouts.frontend')

@section('content')
        <h1>Simple</h1>
      <x-flash/>
        <form action="{{ route('formularios_simple_post') }}" method="POST" name="form">
            <div class="form-group" > 
                <label for="pais">
                    País
                </label>
                <select name="pais" id="pais" class="form-control">
                    <option value="0">Seleccione.....</option>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais['id'] }}">{{ $pais['nombre'] }}</option>                        
                    @endforeach
                </select>
            </div>
            <div class="form-group" > 
                <label for="nombre">
                    Nombre
                </label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
                
            </div>

            <div class="form-group" > 
                <label for="nombre">
                    Email
                </label>
                <input type="email" name="correo" id="correo" class="form-control" value="{{ old('email') }}">
                
            </div>
            <div class="form-group" > 
                <label for="nombre">
                    Descripcion
                </label>
                <textarea name="descripcion" id="descripcion" class="form-control">{{ old('decripcion') }}</textarea>
                
                
            </div>
            <div class="form-group" > 
                <label for="password">
                    Contraseña
                </label>
                <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                
            </div>
            
            
            <hr />
            <div class="form-group" > 
                <label for="pais">
                    Intereses
                </label>
                <div class="form-check">
                    @foreach ($intereses as $interes)
                        <input type="checkbox" name="interes_{{$loop->index}}" id="{{ $interes['id'] }}" class="form-check-input"  value="interes_{{$loop->index}}"/>
                        <label class="form-check-label"    for="interes_{{$loop->index}}">  
                            {{ $interes['nombre'] }}
                        </label>
                        <br/>
                    @endforeach
                </div>
            </div>

            {{ csrf_field() }}
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
@endsection