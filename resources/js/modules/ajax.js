import Cookies from "js-cookie";
//const API_URL = "http://localhost:8000/api";
const API_URL = "https://gestiss.sertsoft.com.br/api";

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        Authorization: `Bearer ${Cookies.get("token")}`,
    },
});
window.API_URL = API_URL;
