@extends('../layouts.frontend')

@section('content')
    <h1>Helpers</h1>
    {{Str::slug("estoy probando slug")}}
    <hr/>
    <h3>
        {{ $version }}
    </h3>
    <hr>
    <h3>
        {{Helpers::getNombre("Hernan")}}
    </h3>
@endsection