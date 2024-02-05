@extends('../layouts.frontend')

@section('content')
<p class="fs-1">Reportes</p>
<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div>
        <h4 class="fst-italic"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mensajes recientes</font></font></h4>
        <ul class="list-unstyled">
          <li>
            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="{{ route('utiles_pdf')}}">
              <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
              <div class="col-lg-8">
                <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reporte PDF</font></font></h6>
                <small class="text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15 de enero de 2023</font></font></small>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
              <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
              <div class="col-lg-8">
                <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reporte EXCEL</font></font></h6>
                <small class="text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14 de enero de 2023</font></font></small>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="{{ route('utiles_cliente_rest')}}">
              <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
              <div class="col-lg-8">
                <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cliente Rest con guzzlehttp</font></font></h6>
                <small class="text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de enero de 2023</font></font></small>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="{{ route('utiles_cliente_soap')}}">
              <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
              <div class="col-lg-8">
                <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cliente Rest con guzzlehttp</font></font></h6>
                <small class="text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 de enero de 2023</font></font></small>
              </div>
            </a>
          </li>
        </ul>
      </div>
 
</div>
    <x-flash />
    
@endsection