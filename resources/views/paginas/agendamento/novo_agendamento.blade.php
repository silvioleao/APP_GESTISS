@extends('_template._main')

@section('title', 'Prescrições')

@section('body')
    <!-- Header -->
    @include('_components._header_pages', ['name' => 'Novo Agendamento'])
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

            </div>
            <div class="dz-media media-45 rounded-circle">

            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Page Content -->
    <div class="page-content">
        <div class="container fb">
            <div class="card card-data" style="width: 402px; height: 240px;">
                <div class="row btn-card-data mt-2">
                    <div class="col-4 ms-2">
                        <button class="btn btn-sm btn-secondary" onclick="voltarPassos()">Voltar</button>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-6">
                            Data
                        </div>
                        @php
                            $arr = array_map(fn($month) => \Carbon\Carbon::create(null, $month)->isoFormat('MMMM'), range(1, 12));
                        @endphp
                        <div class="col-5 text-end">
                            <select id="select-mes" class="form-control">
                                @foreach ($arr as $key => $val)
                                    <option value="{{ $key }}"
                                        {{ $val == \Carbon\Carbon::now()->isoFormat('MMMM') ? 'selected' : '' }}>
                                        {{ $val }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="swiper-btn-center-lr">
                                <div class="swiper-container tag-group mt-4 dz-swiper recomand-swiper">
                                    <div class="swiper-wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lista-medicos">

            </div>

        </div>
    </div>
    <!-- Page Content End-->
@stop

@section('script')
    <script>
        $(() => {
            $("#select-mes").trigger("change");
        });

        let agendamento = {
            data: "",
            profissional: "",
            hora: ""
        };

        let step_cards = 0;
        let btn_confirmar = 0;

        $(".header").addClass("transparent");
        const getCurrentWeekDays = (month) => {
            let selectedMonth = `${moment().format('YYYY')}-${month}-01`;
            const monthStart = moment(selectedMonth).startOf('month');
            const monthEnd = moment(selectedMonth).endOf('month').add(1, 'day').format("YYYY-MM-DD");
            const days = [];
            for (let i = 0; i <= 31; i++) {
                let day = moment(monthStart).add(i, 'days').format("YYYY-MM-DD");

                if (day == monthEnd) break;

                days.push(day);
            }

            return days;
        }

        $("#select-mes").on('change', function() {
            $(".swiper-wrapper").html("");
            let mes = parseInt(this.value) + 1;
            getCurrentWeekDays(mes).forEach(element => {
                if (moment().subtract('days', 1) <= moment(element)) {
                    $(".swiper-wrapper").append(`
                    <div class="swiper-slide" style="width: 95px;">
                        <a href="#" class="btn border" onclick="selecionarData('${element}')" style="width: 90px; height: 100px;">
                            <div class="col-12 m-0 p-0">
                                <span class="fs-4 fw-bolder">${moment(element).format("DD")}</span>
                                <span class="fw-bold">${moment(element).format("ddd")}</span>
                            </div>
                        </a>
                    </div>
                `);
                }
            });
        });

        function selecionarData(data) {
            step_cards = 1;
            agendamento.data = data;
            $("a").removeClass("btn-primary")
            let button = $(`a[onclick="selecionarData('${data}')"]`);
            button.addClass("btn-primary");

            let swiper = $(".swiper-slide");
            swiper.fadeOut(500, () => {
                $("#select-mes").attr("hidden", "true")
                button.parent().css("display", "");
                button.parent().animate({
                    bottom: "65px",
                    width: "360px",
                    height: "40px",
                }, 1500);

                button.css({
                    "width": "360px",
                    "height": "40px"
                });
            });

            $.get(`${API_URL}/mobile/dias_agendamentos?data=${data}&step=1`, function(success) {
                $(".lista-medicos").html("");
                success.info.forEach(element => {
                    if (element.disponibilidade) {
                        $(".lista-medicos").append(`
                            <div class="col-12 medico">
                                <div class="card job-post" onclick="agendarHorario(${element.pro_codigo})">
                                    <div class="card-body p-0">

                                        <div class="d-flex align-items-center media-80 text-center me-3 rounded">
                                            <div class="col-12">
                                                <img src="https://gestiss.sertsoft.com.br/storage/usuarios_images/${element.usu_foto}" alt="">
                                            </div>
                                        </div>

                                        <div class="card-info">
                                            <h6 class="title">${element.usu_nome}</h6>
                                            <span class="location">${element.esp_nome}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        `);
                    }

                })

            }).fail(function(err) {
                Toast.fire({
                    text: err.responseJSON.message,
                    icon: 'error'
                });
            });
        }

        function agendarHorario(pro_codigo) {
            step_cards = 2;
            agendamento.profissional = pro_codigo;
            let card_medico = $(`div[onclick="agendarHorario(${pro_codigo})"]`);
            $('.medico').fadeOut(200, () => {
                $(card_medico).parent().css("display", "");
            });

            card_medico.animate({
                bottom: `+=175px`,
                left: "20px",
                width: "360px"
            });

            $.get(`${API_URL}/mobile/dias_agendamentos?data=${agendamento.data}&profissional=${pro_codigo}&step=2`,
                function(success) {
                    let date = new Date('2023-01-01T08:00:00');
                    for (let index = 0; index < 40; index++) {
                        let minutes = date.getMinutes();
                        let hours = date.getHours();
                        let hora_desejada = `${hours < 10 ? `0${hours}`:hours}:${ minutes== 0?"00":minutes}`;
                        let flagPrintHour = false;
                        success.info.forEach(element => {
                            if (element.age_datahoragravacao == hora_desejada) flagPrintHour = true;
                        });

                        if (!flagPrintHour) {
                            $(".lista-medicos").append(`
                            <div class="col-4 mb-3 medico-hora">
                                <div class="col-12" onclick="definirHorario('${hora_desejada}')">
                                    <span class="btn btn-outline-info rounded-pill">
                                        ${hora_desejada}
                                    </span>
                                </div>
                            </div>
                        `);
                        }
                        flagPrintHour = false;

                        date.setMinutes(date.getMinutes() + 15);
                    }
                });
        }

        let definirHorario = (hora_desejada) => {
            agendamento.hora = hora_desejada;

            let card_hora = $(`div[onclick="definirHorario('${hora_desejada}')"]`);

            let lista = $('.medico-hora').fadeOut(200, () => {
                $(card_hora).parent().css("display", "");
                $(card_hora).parent().css("position", "absolute");
            });

            card_hora.parent().animate({
                bottom: `+=80px`,
                left: "20px",
                width: "360px"
            });

            card_hora.children().animate({
                left: "20px",
                width: "360px"
            });

            if (!btn_confirmar) {
                $(".btn-card-data").append(`
                    <div class="col-6 text-end me-2">
                        <button class="btn btn-sm btn-success" onclick="agendar()">Confirmar</button>
                    </div>
                `);
            }
            btn_confirmar = 1;
        };

        let voltarPassos = () => {
            if (step_cards == 1) {

                let button = $(`a[onclick="selecionarData('${agendamento.data}')"]`);

                $("#select-mes").removeAttr("hidden");
                button.fadeOut(500, () => {
                    $("#select-mes").trigger('change');
                });
                agendamento.data = 0;
                $(".lista-medicos").html(``);
                step_cards = 0;
            } else if (step_cards == 2) {

                $('.medico').fadeIn(200);

                let card_medico = $(`div[onclick="agendarHorario(${agendamento.profissional})"]`);
                card_medico.animate({
                    bottom: `0px`,
                    left: "0px",
                    width: "360px"
                });
                $(`button[onclick="agendar()"]`).parent().remove();
                $(`div[onclick="definirHorario('${agendamento.hora}')"]`).parent().remove();
                $('.medico-hora').remove()
                agendamento.profissional = 0;
                step_cards = 1;
                btn_confirmar = 0;
            }
        };

        let agendar = () => {
            $("#preloader").css("display", "");
            let user = JSON.parse(localStorage.getItem("infos"));
            $.ajax({
                url: `${API_URL}/agendamento/salvar`,
                method: 'POST',
                data: {
                    pro_codigo: agendamento.profissional,
                    tipo_atendimento_id: 2,
                    codciap: 1,
                    age_datahora: agendamento.data,
                    age_datahora_gravacao: agendamento.hora,
                    age_observacao: "",
                    cdo_codigo: user.usu_nome,
                    sga_codigo: 2
                },
                success: function(data) {
                    $("#preloader").css("display", "none");
                    Swal.fire({
                        text: data.success,
                        icon: 'success'
                    })
                    voltarPassos()
                    voltarPassos()
                },
                error: function(err) {

                }
            });
        };
    </script>
@endsection
