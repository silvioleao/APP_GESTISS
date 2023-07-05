import Cookies from "js-cookie";

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        Authorization: `Bearer ${Cookies.get("token")}`,
    },
});
window.API_URL = process.env.MIX_API_URL;
