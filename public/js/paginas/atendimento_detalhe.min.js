let user = JSON.parse(localStorage.getItem("infos"));
let url = window.location.pathname;
let parts = url.split("/");
let ate_codigo = parts.pop() || parts.pop();

$(".header").addClass("transparent");

//Carrega os ultimos 5 atendimentos
$.ajax({
    url: `${BASE_URL}/atendimento_detalhe`,
    method: "GET",
    data: {
        atendimento: ate_codigo,
    },
    success: function (data) {
        console.log(data);
        $(".content-body")
            .find(".placeholder")
            .each(function () {
                $(this).removeClass("placeholder");
            });
        $(".content-body")
            .find(".placeholder")
            .each(function () {
                $(this).removeClass("placeholder");
            });
        $(".med-nome").text(data.pro_nome);
        $(".esp-nome").text(data.esp_nome);
        $(".tis_nome").text(data.tis_nome);
        $(".sta_nome").text(data.sta_nome);
        $(".datahora").text(
            moment(data.datahora).format("DD/MM/YYYY HH:mm:ss")
        );

        if (data.sta_id == 1) {
            $(".instrucoes").html(
                `<h5 class="text-danger">Recomendações</h5>
                    <p>
                        É recomendado que você chegue na unidade de atendimento com 30 minutos de
                        antecedencia para evitar possiveis atrasos nos demais atendimentos.
                    </p>
                `
            );
        }
    },
});
