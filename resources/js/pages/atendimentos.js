var page = 1;
 
$(() => {
    carregarInfos();
});

//Carrega os ultimos 5 atendimentos
function carregarInfos() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var telemedicina = `telemedicina=${url.searchParams.get("telemedicina")}`;

    $.ajax({
        url: `${API_URL}/mobile/atendimentos?page=${page}&${telemedicina}`,
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
                $(".atendimentos-lista").html("");
                $(".atendimentos-lista").removeClass("placeholder-wave");
            }
            ++page;
            data.data.forEach((element) => {
                let video = "";
                if (element.tis_nome == "TELESSAÚDE" && element.sta_id == 1) {
                    video = `<button class='btn btn-outline-warning btn-sm' data-bs-toggle="modal" data-bs-target="#modalVideoChamada" onclick="initVideo('${element.sala_id}')"><i class='fa-solid fa-video'></i></button>`;
                }
                let color;
                switch (element.sta_id) {
                    case 1:
                        color = "text-success";
                        break;
                    case 2:
                        color = "text-info";
                        break;
                    case 3:
                        color = "text-purple";
                        break;
                    case 4:
                        color = "text-pink";
                        break;
                    case 5:
                        color = "text-gray-500";
                        break;
                    case 6:
                        color = "text-danger";
                        break;
                    default:
                        break;
                }

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


                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-flag ${color}"></i>
                                    <div class="item-price">
                                        <small>${element.sta_nome}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <div class="text-end ms-4">
                                    ${video}
                                </div>
                            </div>
                        </div>
                    </li>
                `);
                video = "";
            });
        },
        error: function (err) {
            $(".atendimentos-lista").html("");
            Toast.fire({
                text: err.responseJSON.message,
                icon: "error",
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
