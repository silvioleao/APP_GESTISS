@extends('_template._main')

@section('title', 'Recuperação de senha')

@section('body')
    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->
    <!-- Page Content -->
    <div class="page-content">

        <!-- Banner -->
        <div class="banner-wrapper shape-1">
            <div class="container inner-wrapper">
                <h2 class="dz-title">Recuperar Senha</h2>
                <p class="mb-0">Informe seu e-mail para recuperar sua senha</p>
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
                        <h5 class="mb-0">Esqueci a senha</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <div class="container">
            <div class="account-area">
                <form class="">
                    <div class="input-group">
                        <input type="text" name="usu_email" placeholder="E-mail" class="form-control">
                    </div>
                    <div class="input-group">
                        <a href="javascript:void(0)" class="btn mt-2 btn-primary w-100 btn-rounded"
                            onclick="submit()">Redefinir</a>
                    </div>
                    <span class="text-danger" hidden>O link tem válidade de 60 minutos, entre no seu e-mail e redefina sua
                        senha!</span>
                </form>
            </div>
        </div>
    </div>
    <!-- Page Content End -->
@stop

@section('script')
    <script>
        function submit() {
            let formData = new FormData();
            $.each($(`form .form-control`), function(i, obj) {
                formData.append(obj.name, obj.value);
            });

            $.ajax({
                url: `${API_URL}/usuario/resetar_senha`,
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function(req) {
                    $("#preloader").fadeIn(300);
                },
                success: function(data) {
                    $("#preloader").fadeOut(300);
                    Toast.fire({
                        text: data.status,
                        icon: 'success'
                    })
                    $(".text-danger").removeAttr("hidden")

                },
                error: function(err) {
                    $("#preloader").fadeOut(300);
                    Toast.fire({
                        text: err.status,
                        icon: "error"
                    })
                }
            })
        }
    </script>
@endsection
