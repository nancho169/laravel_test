@extends('../layouts.frontend')

@section('content')
    <h1>Ejemplo stack</h1>
   
    <div>
        <a data-src="{{ asset('img/creeper.png') }}"   data-fancybox="gallery" >
            <img  src="{{ asset('img/creeper.png') }}" width="30%"/>
        </a>
        <a
           data-fancybox="gallery"
           data-src="https://lipsum.app/id/1/1024x768"
           >
          <img src="https://lipsum.app/id/1/100x75" />
        </a>
  
        <a data-fancybox="gallery" data-src="https://lipsum.app/id/2/1024x768">
          <img src="https://lipsum.app/id/2/100x75" />
        </a>
  
        <a data-fancybox="gallery" data-src="https://lipsum.app/id/3/1024x768">
          <img src="https://lipsum.app/id/3/100x75" />
        </a>
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

