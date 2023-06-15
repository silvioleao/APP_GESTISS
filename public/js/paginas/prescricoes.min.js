let user = JSON.parse(localStorage.getItem("infos"));

var $rows = $("li");
var page = 1;

$(".main-in").on("keyup", function () {
    var val = this.value.trim();
    if (val === "") $rows.show();
    else {
        $rows.hide();
        $rows.has("div:contains(" + val + ")").show();
    }
});

//Carrega os ultimos 5 atendimentos
$.ajax({
    url: `${BASE_URL}/prescricoes?page=${page}`,
    method: "GET",
    data: {
        cdo_codigo: user.cidadao.cdo_codigo,
    },
    success: function (data) {
        console.log(data);
        if (page == 1) {
            $(".prescrcicao-lista").html("");
            $(".prescrcicao-lista").removeClass("placeholder-wave");
        }
        ++page;
        data.data.forEach((element) => {
            $(".prescrcicao-lista").append(`
                <li>
                    <div class="item-content">
                        <a href="job-detail.html" class="item-media">
                            <i class="fa-duotone fa-prescription-bottle-pill fa-3x"></i>
                        </a>
                        <div class="item-inner">
                            <div class="item-title-row">
                                <h6 class="item-title">
                                    <a href="job-detail.html">Ver prescrição</a>
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
});
