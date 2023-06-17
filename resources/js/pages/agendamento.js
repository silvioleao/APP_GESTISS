$(() => {
    carregarInfos();
});

function carregarInfos() {
    $.ajax({
        url: `${BASE_URL}/agendamentos`,
        method: "GET",
        success: function (data) {
            if (data.data.length == 0) {
                Toast.fire({
                    text: "Nenhum outro atendimento encontrado",
                    icon: "warning",
                });
                return false;
            }
            if (page == 1) {
                $(".agendamento-lista").html("");
            }
            ++page;
            data.data.forEach((element) => {
                $(".agendamento-lista").append(
                    `<div class="col-12">
                        <div class="card job-post placeholder-wave">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center media-80 text-center bg-warning me-3 rounded">
                                    <div class="col-12">
                                        <h3 class="text-white placeholder">${moment(
                                            element.age_datahora
                                        ).format("DD")}</h3>
                                        <span class="text-white placeholder">${moment(
                                            element.age_datahora
                                        ).format("MMMM")}</span>
                                    </div>
                                </div>

                                <div class="card-info">
                                    <h6 class="title placeholder">${
                                        element.pro_nome
                                    }</h6>
                                    <span class="location placeholder">${
                                        element.esp_nome
                                    }</span>
                                    <span class="text-primary placeholder">
                                        <i class="fa-solid fa-clock"></i>
                                        ${moment(element.age_datahora).format(
                                            "HH:MM:SS"
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
