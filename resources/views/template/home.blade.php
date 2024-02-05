@extends('../layouts.frontend')

@section('content')


<div class="container text-center ">
  
  <hr>
  <div class="row mb-2">
    <div class="col-md-6">
      
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
        
        <div class="col p-4 d-flex flex-column position-static bg-body-secondary">
          
          <strong class="d-inline-block mb-2 text-primary-emphasis"><font style="vertical-align: inherit;"><i class="fa fa-cart-plus" aria-hidden="true"></i>
            <font style="vertical-align: inherit;">MÓDULO - TIENDA</font></font></strong>
          <h3 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PRODUCTOS</font></font></h3>
          <div class="mb-1 text-body-secondary">
            
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actulización: 07 de diciembre</font></font></div>
          <p class="card-text mb-auto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Funciones:
            Alta producto-Baja producto
         
          </font></font></p>
          <a href="{{ route('bd_productos_buscador') }}" class="icon-link gap-1 icon-link-hover stretched-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            VISITAR
            </font></font><svg class="bi"><use xlink:href="#chevron-right"></use></svg>
          </a>
        </div>
        
        <div class="col-auto d-none d-lg-block">
          <!--<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
          <img class="bd-placeholder-img" width="200" height="250" src="{{ asset('img/productos.png') }}">
          
        </div>
        
      </div>
      
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static bg-body-secondary">
          <strong class="d-inline-block mb-2 text-success-emphasis"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="fa fa-cart-plus" aria-hidden="true"></i>MÓDULO - TIENDA</font></font></strong>
          <h3 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CATEGORÍAS</font></font></h3>
          <div class="mb-1 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08 de diciebre</font></font></div>
          <p class="mb-auto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Las categoías agrupan productos.</font></font></p>
          <a href="{{ route('bd_categorias') }}" class="icon-link gap-1 icon-link-hover stretched-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            VISITAR
            </font></font><svg class="bi"><use xlink:href="#chevron-right"></use></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="{{ asset('img/categorias.png') }}">
        </div>
      </div>
    </div>
  </div>
  
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
        <div class="col p-4 d-flex flex-column position-static bg-body-secondary">
          <strong class="d-inline-block mb-2 text-success-emphasis"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="fa fa-cart-plus" aria-hidden="true"></i>MÓDULO - TIENDA</font></font></strong>
          <h3 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">REPORTES</font></font></h3>
          <div class="mb-1 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12 de noviembre</font></font></div>
          <p class="card-text mb-auto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descarga de informes y/o listados en EXCEL y PDF.</font></font></p>
          <a href="{{ route('utiles_inicio') }}" class="icon-link gap-1 icon-link-hover stretched-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            VISITAR
            </font></font><svg class="bi"><use xlink:href="#chevron-right"></use></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!--<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
          <img class="bd-placeholder-img" width="200" height="250" src="{{ asset('img/reportes.png') }}">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static bg-body-secondary">
          <strong class="d-inline-block mb-2 text-success-emphasis"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="fa fa-cart-plus" aria-hidden="true"></i>MÓDULO - TIENDA</font></font></strong>
          <h3 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">REGISTRO DE USUARIOS</font></font></h3>
          <div class="mb-1 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11 de noviembre</font></font></div>
          <p class="mb-auto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario de registro base de usuarios para el uso de esta herramienta.</font></font></p>
          <a href="{{ route('acceso_registro') }}" class="icon-link gap-1 icon-link-hover stretched-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            VISITAR
            </font></font><svg class="bi"><use xlink:href="#chevron-right"></use></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="{{ asset('img/usuarios.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection