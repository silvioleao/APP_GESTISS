var page = 1;

$(() => {
    carregarInfos();
});

//Carrega os ultimos 5 atendimentos
function carregarInfos() {
    $.ajax({
        url: `${API_URL}/mobile/prescricoes?page=${page}`,
        method: "GET",
        beforeSend: function (req) {
            $(".btn-carregar-infos").html(
                "<i class='fa-solid fa-spinner-third fa-spin'></i>"
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
                $(".prescricao-lista").html("");
                $(".prescricao-lista").removeClass("placeholder-wave");
            }
            ++page;
            data.data.forEach((element) => {
                let prescricao = JSON.stringify(element);
                $(".prescricao-lista").append(`
                <li>
                    <div class="item-content">
                        <a href="javascript:void(0)" onclick='modalPrescricao(${prescricao})' data-bs-toggle="modal"
                                data-bs-target="#modal_prescricao" class="item-media">
                            <i class="fa-duotone fa-prescription-bottle-pill fa-3x"></i>
                        </a>
                        <div class="item-inner">
                            <div class="item-title-row">
                                <h6 class="item-title">
                                    <a href="#" onclick='modalPrescricao(${prescricao})' data-bs-toggle="modal"
                                data-bs-target="#modal_prescricao">Ver prescrição</a>
                                </h6>
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-calendar"></i>
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
        error: function (err) {
            $(".prescricao-lista").html("");
            Toast.fire({
                text: err.responseJSON.message,
                icon: "error",
            });
        },
    }).done(function () {
        var $rows = $("li");
        $(".main-in").on("keyup", function () {
            var val = this.value.trim();
            if (val === "") $rows.show();
            else {
                $rows.hide();
                $rows.has("div:contains(" + val + ")").show();
            }
        });
    });
}

function modalPrescricao(prescricao) {
    $(".timeline-item").html(prescricao.pre_descricao);
}
