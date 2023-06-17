@extends('_template._main')

@section('title', 'Prescrições')

@section('body')
    <!-- Header -->
    @include('_components._header_pages')
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
            <div class="col-12">
                <div class="card text-white bg-info">
                    <div class="card-body mb-0">
                        <h5 class="text-white">Agendamento</h5>
                        <small>
                            Precisando de ajuda? Utilize o seu celular para fazer um agendamento de
                            atendimento médico agora. Escolha a especialidade e o médico que deseja.
                        </small>
                        <br>
                        <a href="{{ route('novo_agendamento') }}" class="btn btn-light btn-sm mt-2 text-info">
                            Agendar
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5">
                <h6>Agendamentos</h6>
            </div>

            <div class="row agendamento-lista">
                <div class="col-12">
                    <div class="card job-post placeholder-wave">
                        <div class="card-body p-0">

                            <div class="d-flex align-items-center media-80 text-center bg-warning me-3 rounded">
                                <div class="col-12">
                                    <h3 class="text-white placeholder">25</h3>
                                    <span class="text-white placeholder">Junho</span>
                                </div>
                            </div>

                            <div class="card-info">
                                <h6 class="title placeholder">Nome do médico</h6>
                                <span class="location placeholder">Especialidade</span>
                                <span class="text-primary placeholder">
                                    <i class="fa-solid fa-clock"></i> 00/00/0000 00:00:00
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card job-post placeholder-wave">
                        <div class="card-body p-0">

                            <div class="d-flex align-items-center media-80 text-center bg-warning me-3 rounded">
                                <div class="col-12">
                                    <h3 class="text-white placeholder">25</h3>
                                    <span class="text-white placeholder">Junho</span>
                                </div>
                            </div>

                            <div class="card-info">
                                <h6 class="title placeholder">Nome do médico</h6>
                                <span class="location placeholder">Especialidade</span>
                                <span class="text-primary placeholder">
                                    <i class="fa-solid fa-clock"></i> 00/00/0000 00:00:00
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card job-post placeholder-wave">
                        <div class="card-body p-0">

                            <div class="d-flex align-items-center media-80 text-center bg-warning me-3 rounded">
                                <div class="col-12">
                                    <h3 class="text-white placeholder">25</h3>
                                    <span class="text-white placeholder">Junho</span>
                                </div>
                            </div>

                            <div class="card-info">
                                <h6 class="title placeholder">Nome do médico</h6>
                                <span class="location placeholder">Especialidade</span>
                                <span class="text-primary placeholder">
                                    <i class="fa-solid fa-clock"></i> 00/00/0000 00:00:00
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End-->

    <!-- Menubar -->
    @include('_components._menu_bar')
    <!-- Menubar -->

    <!-- PWA Offcanvas -->
    {{-- @include('_components.instalar_pwa') --}}
    <!-- PWA Offcanvas End -->
    </div>
@stop

@section('script')
    <script src="{{ mix('js/paginas/agendamento.min.js') }}"></script>
@endsection
