@extends('_template._main')

@section('title', 'Cadastro Cidadão')

@section('body')

    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->

    <div class="page-content bottom-content">

        <!-- Banner -->
        <div class="head-details bg-primary">
            <div class="container">
                <div class="dz-info">
                    <p class="location d-block">APP GESTISS</p>
                    <h5 class="title">Sua saúde na palma da mão</h5>
                </div>
                <div class="dz-media media-65">
                    <img src="{{ asset('images/icons/png/icon-128x128.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="fixed-content p-0">
            <div class="container">
                <div class="main-content">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z"
                                    fill="#a19fa8"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mid-content">
                        <h5 class="mb-0">Cadastrar</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <div class="container">
            <form class="my-2 form-cadastro">
                <div class="input-group">
                    <input type="text" name="usu_nome" placeholder="Nome" class="form-control">
                </div>

                <div class="input-group">
                    <input type="text" name="usu_cpf" placeholder="CPF" data-mask="000.000.000-00" class="form-control">
                </div>

                <div class="input-group">
                    <input type="email" name="usu_email" placeholder="E-mail" class="form-control">
                </div>

                <div class="input-group">
                    <input type="text" name="usu_telefone" placeholder="Telefone" data-mask="(00) 0 0000-0000"
                        class="form-control">
                </div>
            </form>
        </div>
        <!-- Page Content End -->

        <!-- Footer -->
        <footer class="footer fixed">
            <div class="container">
                <button onclick="salvar()" class="btn btn-primary w-100 btn-rounded">Salvar</button>
            </div>
        </footer>
        <!-- Footer End -->

    </div>
@stop

@section('script')
    <script>
        function salvar() {
            let formData = new FormData();
            $.each($(`.form-cadastro .form-control`), function(i, obj) {
                formData.append(obj.name, obj.value);
            });

            formData.append("usu_login", $('input[name=usu_cpf]').cleanVal());
            formData.append("usu_senha", $('input[name=usu_cpf]').cleanVal());
            formData.append("perf_cid", true);

            $.ajax({
                url: `${API_URL}/mobile/cadastro`,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: (data) => {
                    console.log(data);
                },
                error: (err) => {
                    Toast.fire({
                        text: err.responseJSON.usu_cpf,
                        icon: 'error'
                    })
                }
            })
        }
    </script>
@endsection
