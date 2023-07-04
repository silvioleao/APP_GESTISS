var page = 1;
$(() => {
    carregarInfos();
});

function carregarInfos() {
    $.ajax({
        url: `${API_URL}/mobile/agendamentos?page=${page}`,
        method: "GET",
        beforeSend: function (req) {
            $(".btn-carregar-infos").html(
                "<i class='fa-solid fa-spinner-third fa-spin'></i>"
            );
        },
        success: function (data) {
            $(".btn-carregar-infos").html("Carregar mais...");
            console.log(data.data.length);
            if (data.data.length == 0) {
                Toast.fire({
                    text: "Nenhum outro agendamento encontrado",
                    icon: "warning",
                });
                return false;
            }

            if (page == 1) {
                $(".agendamento-lista").html("");
                $(".agendamento-lista").removeClass("placeholder-wave");
            }
            ++page;
            data.data.forEach((element) => {
                $(".agendamento-lista").append(
                    `<div class="col-12">
                        <div class="card job-post">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center media-80 text-center bg-warning me-3 rounded">
                                    <div class="col-12">
                                        <h3 class="text-white">${moment(
                                            element.age_datahora
                                        ).format("DD")}</h3>
                                        <span class="text-white">${moment(
                                            element.age_datahora
                                        ).format("MMMM")}</span>
                                    </div>
                                </div>

                                <div class="card-info">
                                    <h6 class="title">${element.pro_nome}</h6>
                                    <span class="location">${
                                        element.esp_nome
                                    }</span>
                                    <span class="text-primary">
                                        <i class="fa-solid fa-clock"></i>
                                        ${moment(element.age_datahora).format(
                                            "HH:mm:ss"
                                        )}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>`
                );
            });
        },
        error: function (err) {
            $(".agendamento-lista").html("");
            Toast.fire({
                text: err.responseJSON.message,
                icon: "error",
            });
        },
    });
}
