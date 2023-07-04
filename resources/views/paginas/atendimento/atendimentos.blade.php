@extends('_template._main')

@section('title', 'Atendimentos Cidadão')

@section('style')
    <style>
        #stream2 {
            max-width: 160px;
            max-height: 160px;
        }
    </style>
@stop

@section('body')
    <!-- Header -->
    @include('_components._header_pages', ["name" => "Atendimentos"])
    <!-- Header End -->

    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->

    <!-- Sidebar -->
    @include('_components._sidebar')
    <!-- Sidebar End -->

    <!-- Page Content -->
    <div class="page-content">
        <div class="container fb">
            <div class="serach-area">
                <div class="input-group search-input">
                    <input type="text" placeholder="Filtrar atendimentos" class="form-control style-1 main-in">
                    <a href="javascript:void(0);" class="btn-close">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>

                <div class="list item-list recent-jobs-list">
                    <ul class="placeholder-wave atendimentos-lista">
                        <li>
                            <div class="item-content">
                                <a href="javascript:void(0)" class="item-media">
                                    <i class="fa-solid fa-hospital fa-3x"></i>
                                </a>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-subtitle placeholder">Nome da Unidade</div>
                                        <h6 class="item-title placeholder">
                                            <a href="job-detail.html">Tipo de Serviço</a>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa-solid fa-calendar-circle-user"></i>
                                        <div class="item-price placeholder">Data e hora</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-user-doctor"></i>
                                        <div class="item-price placeholder">Nome do médico</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="item-content">
                                <a href="job-detail.html" class="item-media">
                                    <i class="fa-solid fa-hospital fa-3x"></i>
                                </a>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-subtitle placeholder">Nome da Unidade</div>
                                        <h6 class="item-title placeholder">
                                            <a href="job-detail.html">Tipo de Serviço</a>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa-solid fa-calendar-circle-user"></i>
                                        <div class="item-price placeholder">Data e hora</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-user-doctor"></i>
                                        <div class="item-price placeholder">Nome do médico</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="item-content">
                                <a href="job-detail.html" class="item-media">
                                    <i class="fa-solid fa-hospital fa-3x"></i>
                                </a>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-subtitle placeholder">Nome da Unidade</div>
                                        <h6 class="item-title placeholder">
                                            <a href="job-detail.html">Tipo de Serviço</a>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa-solid fa-calendar-circle-user"></i>
                                        <div class="item-price placeholder">Data e hora</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-user-doctor"></i>
                                        <div class="item-price placeholder">Nome do médico</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary btn-carregar-infos" onclick="carregarInfos()">Carregar
                                mais...</button>
                        </div>
                    </div>
                </div>
                <!-- Job List -->
            </div>
        </div>
    </div>
    <!-- Page Content End-->

    @include('paginas.atendimento._modal_chamada_video')
@stop

@section('script')
    <script src="{{ mix('js/telemedicina/video.min.js') }}"></script>
    <script defer src="{{ mix('js/paginas/atendimento.min.js') }}"></script>
@endsection
