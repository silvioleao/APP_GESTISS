@extends('_template._main')

@section('title', 'Prescrições')

@section('style')
    <link rel="stylesheet" href="{{ mix('css/quill.min.css') }}">
@stop

@section('body')
    <!-- Header -->
    @include('_components._header_pages', ['name' => 'Perfil'])
    <!-- Header End -->

    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->

    <!-- Sidebar -->
    @include('_components._sidebar')
    <!-- Sidebar End -->

    <!-- Page Content -->
    <div class="page-content bottom-content ">
        <div class="dz-banner-heading">
            <div class="overlay-black-light">
                <img src="{{ asset('images/perfil-background.png') }}" class="bnr-img" alt="">
            </div>
        </div>
        <div class="container company-detail profile-area">
            <div class="profile">
                <div class="media media-100">
                    <img src="" class="user-foto" alt="/">
                </div>
                <div class="mb-2">
                    <h4 class="mb-0 user-nome"></h4>
                </div>
            </div>

            <ul class="contact-box">

                <li class="d-flex align-items-center mb-3">
                    <a href="javascript:void(0);" class="contact-icon">
                        <i class="fa-solid fa-user fa-xl"></i>
                    </a>
                    <div class="ms-3">
                        <p class="mb-2">Usuário</p>
                        <h6><a href="javascript:void(0);" class="usu_usuario"></a></h6>
                    </div>
                </li>

                <li class="d-flex align-items-center">
                    <a href="javascript:void(0);" class="contact-icon">
                        <i class="fa-solid fa-phone fa-xl"></i>
                    </a>
                    <div class="ms-3">
                        <p class="mb-2">Telefone</p>
                        <h6><a href="javascript:void(0);" class="usu_telefone"></a></h6>
                    </div>
                </li>

                <li class="d-flex align-items-center my-3">
                    <a href="javascript:void(0);" class="contact-icon">
                        <i class="fa-solid fa-envelope fa-xl"></i>
                    </a>
                    <div class="ms-3">
                        <p class="mb-2">E-mail</p>
                        <h6><a href="javascript:void(0);" class="usu_email"></a></h6>
                    </div>
                </li>

                <li class="d-flex align-items-center">
                    <a href="javascript:void(0);" class="contact-icon">
                        <i class="fa-solid fa-location-dot fa-xl"></i>
                    </a>
                    <div class="ms-3">
                        <p class="mb-2">Endereço</p>
                        <h6><a href="javascript:void(0);" class="usu_endereco"></a></h6>
                    </div>
                </li>
            </ul>

            <div class="skill-section">
                <h5>Estatísticas</h5>
                <div class="row g-3 placeholder-wave">
                    <div class="col-4">
                        <div class="skill-bar">
                            <span class="fa-stack fa-2x mb-2">
                                <i class="fa-solid fa-circle fa-stack-2x" style="color:white"></i>
                                <i class="fa-regular fa-lungs-virus fa-stack-1x text-primary"></i>
                            </span>
                            <br>
                            <span class="fw-semibold alergias-count placeholder">----</span>
                            <h6 class="title">Alergias</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="skill-bar">
                            <span class="fa-stack fa-2x mb-2">
                                <i class="fa-solid fa-circle fa-stack-2x" style="color:white"></i>
                                <i class="fa-regular fa-file-signature fa-stack-1x text-primary"></i>
                            </span>
                            <br>
                            <span class="fw-semibold atestados-count placeholder">----</span>
                            <h6 class="title">Atestados</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="skill-bar">
                            <span class="fa-stack fa-2x mb-2">
                                <i class="fa-solid fa-circle fa-stack-2x" style="color:white"></i>
                                <i class="fa-regular fa-prescription-bottle-pill fa-stack-1x text-primary"></i>
                            </span>
                            <br>
                            <span class="fw-semibold prescricoes-count placeholder">----</span>
                            <h6 class="title">Prescrições</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="skill-bar">
                            <span class="fa-stack fa-2x mb-2">
                                <i class="fa-solid fa-circle fa-stack-2x" style="color:white"></i>
                                <i class="fa-regular fa-file-export fa-stack-1x text-primary"></i>
                            </span>
                            <br>
                            <span class="fw-semibold encaminhamentos-count placeholder">----</span>
                            <h6 class="title">Encam.</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="skill-bar">
                            <span class="fa-stack fa-2x mb-2">
                                <i class="fa-solid fa-circle fa-stack-2x" style="color:white"></i>
                                <i class="fa-regular fa-person-dots-from-line fa-stack-1x text-primary"></i>
                            </span>
                            <br>
                            <span class="fw-semibold exames-count placeholder">----</span>
                            <h6 class="title">Exames</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End-->
@stop

@section('script')
    <script>
        let user = JSON.parse(localStorage.getItem("infos"));
        $(".user-foto").attr("src", `https://gestiss.sertsoft.com.br/storage/usuarios_images/${user.usu_foto}`);
        $(".user-nome").text(user.cidadao.cdo_nomesocial);
        $(".usu_usuario").text(user.usu_login);
        $(".usu_telefone").text(user.usu_telefone);
        $(".usu_email").text(user.usu_email);
        $(".usu_endereco").text(`${user.usu_logradouro}, ${user.usu_numero}`);

        $.ajax({
            url: `${API_URL}/mobile/perfil_cidadao`,
            data: {
                cdo_codigo: user.cidadao.cdo_codigo
            },
            success: function(data) {
                $('.placeholder-wave').removeClass('placeholder-wave');
                $('.placeholder').removeClass('placeholder');
                $(".alergias-count").text(data.alergias)
                $(".atestados-count").text(data.atestados)
                $(".encaminhamentos-count").text(data.encaminhamentos)
                $(".exames-count").text(data.exames)
                $(".prescricoes-count").text(data.prescricoes)
            }
        })
    </script>
@endsection
