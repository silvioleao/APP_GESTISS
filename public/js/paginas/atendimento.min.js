var $rows = $("li");

$(".main-in").on("keyup", function () {
    var val = this.value.trim();
    if (val === "") $rows.show();
    else {
        $rows.hide();
        $rows.has("div:contains(" + val + ")").show();
    }
});
