<!-- Jeferson Lovo -->
<!-- jefersonlovo2009@hotmai.com -->
<!-- https://www.linkedin.com/in/jeferson-lovo-2025/ -->
<!-- jefersonlovo@fundacaomt.com.br -->

<!-- extensão da pagina modelo -->
@extends('layout.principal')

@section('main')

<div class="container">
  <div class="py-5 text-center">
    <h2>Realizados</h2>
  </div>
  <div class="row">

    <!-- Chamados -->
    <div class="col-md-4" >
      <h3>Breve chamados</h3>
      {{-- TODO --}}
    </div>

    <!-- inventario -->
    <div class="col-md-4" >
      <h3>Breve inventario</h3>
      {{-- TODO --}}
    </div>

    <!-- Check List -->
    <div class="col-md-4" >
        <h3>
          <a class="nav-link" href={{ route('lista') }}>Check List Realizados </a>
        </h3>
    {{-- TODO --}}
    </div>

  </div>
</div>



@endsection

