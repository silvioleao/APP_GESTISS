/* Theme Panel Save */
const body = $("body");
const html = $("html");

(function ($) {
    "use strict";
    //change the theme version controller
    $(".theme-btn").on("click", function () {
        $("body").toggleClass("theme-dark");
        $(".theme-btn").toggleClass("active");

        if ($("body").hasClass("theme-dark")) {
            setCookie("themeVersion_value", "theme-dark");
        } else {
            setCookie("themeVersion_value", "");
        }
    });

    jQuery.expr[":"].icontains = function (a, i, m) {
        return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };

    /* Set Theme By Cookie */
    setThemePanel();
})($);

/* Cookies Function */
function setCookie(cname, cvalue, exhours) {
    var d = new Date();

    if (cname == "themeVersion_value") {
        d.setTime(d.getTime() * 2); /* 1 ano */
    } else {
        d.setTime(d.getTime() + 30 * 60 * 1000); /* 30 Minutes */
    }

    var expires = "expires=" + d.toUTCString();
    document.cookie = `${cname}=${cvalue || ""}; ${expires}; path=/; domain=${
        location.hostname
    }`;
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setThemePanel() {
    let themeOptionValue = getCookie("themeVersion_value");
    if (themeOptionValue != "") {
        body.addClass(themeOptionValue);
        $(".theme-btn").addClass("active");
    }
}

/* Cookies Function End */
