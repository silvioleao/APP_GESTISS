//Carrega os dois banners de atendimentos e agendamentos
$.ajax({
    url: `${API_URL}/mobile/baners`,
    method: "GET",
    success: function (data) {
        $(".banner-atendimento").text(data.atendimentos);
        $(".banner-agendamento").text(data.agendamentos);

        $(".features-box")
            .find(".placeholder-glow")
            .each(function () {
                $(this).removeClass("placeholder-glow");
            });
        $(".features-box")
            .find(".placeholder")
            .each(function () {
                $(this).removeClass("placeholder");
            });
    },
});

//Carrega os ultimos 5 atendimentos
$.ajax({
    url: `${API_URL}/mobile/atendimentos?page=1`,
    method: "GET",
    success: function (data) {
        $(".list-atendimento-recente").html("");
        data.data.forEach((element) => {
            $(".list-atendimento-recente").append(`
                <li>
                    <div class="item-content">
                        <a href="/detalhe/atendimento/${
                            element.ate_codigo
                        }" class="item-media">
                            <i class="fa-solid fa-hospital fa-3x"></i>
                        </a>
                        <div class="item-inner">
                            <div class="item-title-row">
                                <div class="item-subtitle">Nome da Unidade</div>
                                <h6 class="item-title">
                                    <a href="/detalhe/atendimento/${
                                        element.ate_codigo
                                    }">${element.tis_nome}</a>
                                </h6>
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-calendar-circle-user"></i>
                                <div class="item-price">${moment(
                                    element.datahora
                                ).format("DD/MM/YYYY HH:mm:ss")}</div>
                            </div>

                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-user-doctor"></i>
                                <div class="item-price">${
                                    element.pro_nome
                                }</div>
                            </div>
                        </div>
                    </div>
                </li>
            `);
        });
    },
});
