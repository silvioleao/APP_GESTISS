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

            <div class="card card-data">
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

    <!-- Menubar -->
    @include('_components._menu_bar')
    <!-- Menubar -->

    <!-- PWA Offcanvas -->
    {{-- @include('_components.instalar_pwa') --}}
    <!-- PWA Offcanvas End -->
    </div>
@stop

@section('script')
    <script>
        $(() => {
            $("#select-mes").trigger("change");
        });

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
            });
        });

        function selecionarData(data) {
            $("a").removeClass("btn-primary")
            $(`a[onclick="selecionarData('${data}')"]`).addClass("btn-primary");
            $.get(`${API_URL}/mobile/dias_agendamentos?data=${data}&step=1`, function(success) {
                $(".lista-medicos").html("");
                success.info.forEach(element => {
                    if (element.disponibilidade) {
                        $(".lista-medicos").append(`
                            <div class="col-12">
                                <div class="card job-post">
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
    </script>
@endsection
