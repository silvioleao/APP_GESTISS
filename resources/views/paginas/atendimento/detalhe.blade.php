@extends('_template._main')

@section('title', 'Detalhe Atendimento')

@section('body')
    <!-- Header -->
    @include('_components._header_pages', ["name" => "Atendimento Detalhe"])
    <!-- Header End -->

    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->

    <!-- Sidebar -->
    @include('_components._sidebar')
    <!-- Sidebar End -->

    <!-- Page Content -->
    <div class="page-content">
        <div class="content-body fb">
            <div class="dz-banner-heading">
                <div class="overlay-black-light">
                    <img src="{{ asset('images/atendimento-background.png') }}" class="bnr-img" alt="">
                </div>
            </div>

            <div class="container company-detail placeholder-glow">

                <div class="detail-content mt-5">
                    <div class="flex-1">
                        <h4 class="med-nome placeholder">-------------------------</h4>
                        <p class="esp-nome placeholder">-----------------</p>
                    </div>
                </div>
                <ul class="contact-box">
                    <li class="d-flex align-items-center">
                        <a href="javascript:void(0);" class="contact-icon">
                            <i class="fa-duotone fa-user-nurse-hair-long fa-2x mt-2"></i>
                        </a>
                        <div class="ms-3">
                            <p class="mb-2">Tipo de Serviço</p>
                            <h6 class="tis_nome placeholder">-----------------</h6>
                        </div>
                    </li>
                    <li class="d-flex align-items-center my-3">
                        <a href="javascript:void(0);" class="contact-icon">
                            <i class="fa-duotone fa-heart-pulse fa-2x fa-beat mt-3"></i>
                        </a>
                        <div class="ms-3">
                            <p class="mb-2">Status</p>
                            <h6 class="sta_nome placeholder">-------------------</h6>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <a href="javascript:void(0);" class="contact-icon">
                            <i class="fa-duotone fa-calendar-clock fa-2x mt-2"></i>
                        </a>
                        <div class="ms-3">
                            <p class="mb-2">Data e hora</p>
                            <h6 class="datahora placeholder">--------------------</h6>
                        </div>
                    </li>
                </ul>
                <div class="instrucoes">

                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/paginas/atendimento_detalhe.min.js') }}"></script>
@endsection
