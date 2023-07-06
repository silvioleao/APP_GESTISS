@extends('_template._main')

@section('title', 'Login')

@section('body')
    <!-- Preloader -->
    @include('_components._spiner')
    <!-- Preloader end-->
    <!-- Page Content -->
    <div class="page-content">

        <!-- Banner -->
        <div class="banner-wrapper shape-1">
            <div class="container inner-wrapper">
                <h2 class="dz-title">Entrar</h2>
                <p class="mb-0">Entre com as informações da sua conta</p>
            </div>
        </div>
        <!-- Banner End -->

        <div class="container">
            <div class="account-area">
                <form class="">
                    <div class="input-group">
                        <input type="text" name="usu_login" placeholder="CPF" class="form-control">
                    </div>
                    <div class="input-group">
                        <input type="password" name="usu_senha" placeholder="Senha" id="dz-password"
                            class="form-control be-0">
                        <span class="input-group-text show-pass">
                            <i class="fa fa-eye-slash"></i>
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                    <a href="{{ route('esqueci_senha') }}" class="btn-link d-block text-center">Esqueceu sua senha ?</a>
                    <div class="input-group">
                        <a href="javascript:void(0)" class="btn mt-2 btn-primary w-100 btn-rounded"
                            onclick="submit()">Entrar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Page Content End -->

    <!-- Footer -->
    <footer class="footer fixed">
        <div class="container">
            <a href="{{ route('cadastro') }}" class="btn btn-primary light btn-rounded text-primary d-block">Criar uma
                conta</a>
        </div>
    </footer>
    <!-- Footer End -->
@stop

@section('script')
    <script>
        function submit() {
            let formData = new FormData();
            $.each($(`form .form-control`), function(i, obj) {
                formData.append(obj.name, obj.value);
            });

            $.ajax({
                url: `${API_URL}/login`,
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function(req) {
                    $("#preloader").fadeIn(300);
                },
                success: function(data) {
                    Cookies.set("token", data.token, {
                        expires: 365
                    });
                    localStorage.setItem("infos", JSON.stringify(data.user));
                    window.location.href = "/painel";
                },
                error: function(err) {
                    $("#preloader").fadeOut(300);
                    localStorage.clear();
                    Cookies.remove("token");
                    Toast.fire({
                        text: err.responseJSON.message,
                        icon: 'error'
                    });
                }
            })
        }
    </script>
@endsection
