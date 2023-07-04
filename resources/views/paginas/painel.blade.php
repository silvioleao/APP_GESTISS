@extends('_template._main')

@section('title', 'Painel do Cidadão')

@section('body')
    <!-- Header -->
    @include('_components._header_painel')
    <!-- Header End -->

    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->

    <!-- Sidebar -->
    @include('_components._sidebar')
    <!-- Sidebar End -->

    <!-- Banner -->
    <div class="banner-wrapper author-notification">
        <div class="container inner-wrapper">
            <div class="dz-info">
                <span></span>
                <h2 class="user-name mb-0"></h2>
            </div>
            <div class="dz-media media-45 rounded-circle">
                <a href="{{ route('perfil') }}">
                    <img src="" class="rounded-circle user-avatar" alt="author-image">
                </a>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Page Content -->
    <div class="page-content mt-5">
        <div class="content-inner pt-0">
            <div class="container fb">
                <!-- Dashboard Area -->
                <div class="m-b30 dashboard-area">
                    <!-- Features -->
                    <div class="features-box">
                        <div class="row m-b20 g-3 placeholder-glow">
                            <div class="col">
                                <div class="card card-bx card-content bg-primary">
                                    <div class="card-body">
                                        <i class="fa-duotone fa-user-doctor-message placeholder fa-4x"></i>
                                        <div class="card-info">
                                            <h4 class="title banner-atendimento placeholder"></h4>
                                            <p class="placeholder">Atendimentos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-bx card-content bg-secondary">
                                    <div class="card-body">
                                        <i class="fa-duotone fa-calendars placeholder fa-4x"></i>
                                        <div class="card-info">
                                            <h4 class="title banner-agendamento placeholder"></h4>
                                            <p class="placeholder">Agendamentos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Features End -->

                    <!-- Atalhos Rápidos -->
                    <div class="categorie-section">
                        <div class="title-bar">
                            <h5 class="dz-title">Atalhos rápidos</h5>

                            <div class="swiper-defult-pagination pagination-dots style-1 p-0"></div>
                        </div>

                        <div class="swiper-btn-center-lr">
                            <div class="swiper-container tag-group mt-4 dz-swiper recomand-swiper">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide" style="width: 100px;">
                                        <a href="#" class="btn p-0" title="Alergias">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <i class="fa-duotone fa-lungs-virus text-primary fa-2x mb-2"></i>
                                                    <small class="text-center">Alergias</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide" style="width: 100px;">
                                        <a href="#" class="btn p-0" title="Atestados">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <i class="fa-duotone fa-file-signature text-primary fa-2x mb-2"></i>
                                                    <small class="text-center">Atesta.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide" style="width: 100px;">
                                        <a href="#" class="btn p-0" title="Encaminhamentos">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <i class="fa-duotone fa-file-export text-primary fa-2x mb-2"></i>
                                                    <small class="text-center">Encam.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide" style="width: 100px;">
                                        <a href="#" class="btn p-0" title="Médicos que já atenderam">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <i class="fa-duotone fa-user-doctor text-primary fa-2x mb-2"></i>
                                                    <small class="text-center">Médicos</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide" style="width: 100px;">
                                        <a href="#" class="btn p-0" title="Exames">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <i
                                                        class="fa-duotone fa-person-dots-from-line text-primary fa-2x mb-2"></i>
                                                    <small class="text-center">Exames</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim dos Atalhos Rápidos -->


                    <!-- Atendimentos Recentes -->
                    <div class="title-bar">
                        <h5 class="dz-title">Atendimentos Recentes</h5>
                        <a class="btn btn-sm text-primary" href="{{ route('atendimentos') }}">Mais</a>
                    </div>
                    <div class="list item-list recent-jobs-list">
                        <ul class="list-atendimento-recente placeholder-glow">
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
                    </div>
                    <!-- Fim dos Atendimentos Recentes -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End-->
@stop

@section('script')
    <script src="{{ mix('js/paginas/painel.min.js') }}"></script>
@endsection
