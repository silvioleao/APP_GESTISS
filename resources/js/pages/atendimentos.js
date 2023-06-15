let user = JSON.parse(localStorage.getItem("infos"));

var page = 1;

$(() => {
    carregarInfos();
});

//Carrega os ultimos 5 atendimentos
function carregarInfos() {
    $.ajax({
        url: `${BASE_URL}/atendimentos?page=${page}`,
        method: "GET",
        data: {
            cdo_codigo: user.cidadao.cdo_codigo,
        },
        beforeSend: function (req) {
            $(".btn-carregar-infos").html(
                "<i class='fa-duotone fa-arrows-rotate fa-spin'></i>"
            );
        },
        success: function (data) {
            $(".btn-carregar-infos").html("Carregar mais...");
            if (data.data.length == 0) {
                Toast.fire({
                    text: "Nenhum outro atendimento encontrado",
                    icon: "warning",
                });
                return false;
            }
            if (page == 1) {
                $(".atendimentos-lista").html("");
                $(".atendimentos-lista").removeClass("placeholder-wave");
            }
            ++page;
            data.data.forEach((element) => {
                $(".atendimentos-lista").append(`
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
    }).done(function () {
        var $rows = $(".atendimentos-lista li");
        $(".main-in").on("keyup", function () {
            var val = this.value.trim();
            if (val === "") $rows.show();
            else {
                $rows.hide();
                $rows.has("div:icontains(" + val + ")").show();
            }
        });
    });
}
