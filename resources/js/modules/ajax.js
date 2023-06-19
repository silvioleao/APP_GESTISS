import Cookies from "js-cookie";
//https://gestiss.sertsoft.com.br/api/
const BASE_URL = "http://localhost:8000/api/mobile";
const API_URL = "http://localhost:8000/api/";

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        Authorization: `Bearer ${Cookies.get("token")}`,
    },
});
window.BASE_URL = BASE_URL;
window.API_URL = API_URL;
