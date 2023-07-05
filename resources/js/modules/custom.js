var Gestiss = (function () {
    ("use strict");

    let deferredPrompt; // Permite mostrar o prompt de instalação do PWA
    let setupButton;
    let loginFinger = false;
    //PWA instalation
    var handleIntall = function () {
        window.addEventListener("beforeinstallprompt", (e) => {
            // Previne que o chrome >= 67 mostre o prompt automaticamente.
            e.preventDefault();
            // Salva o evento para ser chamado depois
            deferredPrompt = e;
            if (setupButton == undefined) {
                setupButton = document.getElementsByClassName("pwa-btn");
            }
        });
    };

    /* Search Bar ============ */
    var screenWidth = $(window).width();
    var screenHeight = $(window).height();

    // Preloader
    var handlePreloader = function () {
        setTimeout(function () {
            $("#preloader").fadeOut(300);
        }, 300);
    };

    // Menubar Toggler
    var handleMenubar = function () {
        $(".menu-toggler").on("click", function () {
            $(".sidebar").toggleClass("show");
        });
        $(".menu-toggler").on("click", function () {
            $(".menu-toggler").toggleClass("show");
        });
    };

    // Show Pass
    var handleShowPass = function () {
        $(".show-pass").on("click", function () {
            $(this).toggleClass("active");
            if ($("#dz-password").attr("type") == "password") {
                $("#dz-password").attr("type", "text");
            } else if ($("#dz-password").attr("type") == "text") {
                $("#dz-password").attr("type", "password");
            }
        });
    };

    // Sticky Header
    var handleIsFixed = function () {
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                $(".main-bar").addClass("sticky-header");
            } else {
                $(".main-bar").removeClass("sticky-header");
            }
        });
    };

    // Custom File Input
    var handleCustomFileInput = function () {
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this)
                .siblings(".custom-file-label")
                .addClass("selected")
                .html(fileName);
        });
    };

    // Default Select
    var handleSelectpicker = function () {
        if ($(".default-select").length > 0) {
            $(".default-select").selectpicker();
        }
    };

    // Menubar Nav Active
    var handleMenubarNav = function () {
        $(".menubar-nav .nav-link").on("click", function () {
            $(".menubar-nav .nav-link").removeClass("active");
            $(this).addClass("active");
        });
    };

    // Message Sheet
    var handleMessageHandle = function () {
        $(".message-area .icon-popup").on("click", function () {
            $(".message-icon").slideToggle("slow");
        });
        $(".messagebar-sheet-image").on("change", function () {
            var iconsrc = $(this).attr("data-icon");

            if ($(this).find('input[type="checkbox"]').is(":checked")) {
                $(".append-media").append(
                    "<div class='emoji-icon' data-icon=" +
                        iconsrc +
                        "><img src=" +
                        iconsrc +
                        "></div>"
                );
            } else {
                var mediaicon = $(
                    '.message-area .emoji-icon[data-icon="' + iconsrc + '"]'
                );
                mediaicon.remove();
            }
        });
    };

    // Scroll Top
    var handleScrollTop = function () {
        "use strict";
        $(window).bind("scroll", function () {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $(".btn.scrollTop").fadeIn(500);
            } else {
                $(".btn.scrollTop").fadeOut(500);
            }
        });
        /* page scroll top on click function end*/
    };

    // Page back btn
    var handleGoBack = function () {
        $(".back-btn").on("click", function () {
            window.history.go(-1);
            return false;
        });
    };

    // PWA Modal
    var handlePWAModal = function () {
        if (!window.matchMedia("(display-mode: standalone)").matches) {
            setTimeout(function () {
                $(".pwa-offcanvas").addClass("show");
                $(".pwa-backdrop").addClass("fade show");
            }, 1000);

            $(".pwa-btn").on("click", function () {
                //Se clicar em instalar
                $(".pwa-offcanvas").slideUp(500, function () {
                    $(this).removeClass("show");
                });
                setTimeout(function () {
                    // Mostra o prompt de instalação
                    deferredPrompt.prompt();
                    setupButton.disabled = true;
                    //
                    deferredPrompt.userChoice.then((choiceResult) => {
                        if (choiceResult.outcome === "accepted") {
                            console.log("PWA setup accepted");
                            // hide our user interface that shows our A2HS button
                            setupButton.style.display = "none";
                        } else {
                            console.log("PWA setup rejected");
                        }
                        deferredPrompt = null;
                    });

                    $(".pwa-backdrop").removeClass("show");
                }, 500);
            });

            $(".pwa-backdrop, .pwa-close").on("click", function () {
                $(".pwa-offcanvas").slideUp(500, function () {
                    $(this).removeClass("show");
                    $(".pwa-backdrop").removeClass("show");
                });

                return false;
            });
        }
    };

    //Saudações ao usuário
    var handleHour = () => {
        let now = new Date();
        if (now.getHours() >= 0 && now.getHours() < 5) {
            $(".dz-info span").text("Boa madrugada");
        } else if (now.getHours() >= 5 && now.getHours() < 12) {
            $(".dz-info span").text("Bom dia");
        } else if (now.getHours() >= 12 && now.getHours() < 18) {
            $(".dz-info span").text("Boa tarde");
        } else {
            $(".dz-info span").text("Boa noite");
        }
    };

    //Cuida da autenticação por biometria
    var handleBiometric = () => {
        if (loginFinger) {
            let optionLogin = {
                publicKey: {
                    // The challenge is a random value generated by the server
                    challenge: Uint8Array.from("random_challenge_value", (c) =>
                        c.charCodeAt(0)
                    ),
                    // Set the allowed authenticator types
                    authenticatorSelection: {
                        authenticatorAttachment: "platform",
                        userVerification: "required",
                    },
                    // Set the supported credentials (e.g., fingerprint)
                    allowCredentials: [
                        {
                            type: "public-key",
                            id: Uint8Array.from("existing_credential_id", (c) =>
                                c.charCodeAt(0)
                            ),
                        },
                    ],
                },
            };
            loginWithFingerPrint(optionLogin);
        } else {
            $("a i.fa-fingerprint")
                .parent()
                .parent()
                .on("click", () => {
                    // Check if the browser supports the Web Authentication API
                    if (!window.PublicKeyCredential) {
                        Toast.fire({
                            text: "Seu dispositivo não suporta autenticação por biometria!",
                            icon: "error",
                        });
                    }

                    // Options for the Web Authentication API
                    let encoder = new TextEncoder();
                    let user = JSON.parse(localStorage.getItem("infos"));
                    const options = {
                        publicKey: {
                            // The challenge is a random value generated by the server
                            challenge: Uint8Array.from(
                                "random_challenge_value",
                                (c) => c.charCodeAt(0)
                            ),
                            // Set the allowed authenticator types
                            authenticatorSelection: {
                                authenticatorAttachment: "platform",
                                userVerification: "required",
                            },
                            // Set the supported credentials (e.g., fingerprint)
                            allowCredentials: [
                                {
                                    type: "public-key",
                                    id: Uint8Array.from(
                                        "existing_credential_id",
                                        (c) => c.charCodeAt(0)
                                    ),
                                },
                            ],
                        },
                    };

                    $("#preloader").fadeIn(300);
                    $("#preloader").html(
                        "<h5 id='span-infos-splash'>Coletando informações...Aguarde</h5>"
                    );

                    navigator.credentials
                        .create(options)
                        .then(handleAuthenticationResponse)
                        .catch((error) => {
                            $("#span-infos-splash").remove();
                            handlePreloader();
                        });
                });
        }
    };

    // Function to handle the authentication response
    let handleAuthenticationResponse = (response) => {
        $("#span-infos-splash").text("Salvando biometria...");
        const publicKeyCredential = {
            id: response.id,
            type: response.type,
            rawId: response.rawId,
            action: loginFinger,
            response: {
                clientDataJSON: arrayBufferToBase64Url(
                    response.response.clientDataJSON
                ),
                authenticatorData: arrayBufferToBase64Url(
                    response.response.authenticatorData
                ),
                signature: arrayBufferToBase64Url(response.response.signature),
                userHandle: arrayBufferToBase64Url(
                    response.response.userHandle
                ),
            },
        };

        // Send the publicKeyCredential to the server for verification
        // using an AJAX request or any other suitable method
        console.log(loginFinger);
        loginFinger ? "" : localStorage.setItem("fingerprint", true);
        sendCredentialToServer(publicKeyCredential);
    };

    let loginWithFingerPrint = (options) => {
        navigator.credentials
            .get(options)
            .then(handleAuthenticationResponse)
            .catch((error) => {
                Toast.fire({
                    text: "Não foi possivel realizar a autenticação, entre com seu CPF e senha",
                    icon: "error",
                });
            });
    };

    let sendCredentialToServer = (publicKeyCredential) => {
        $.ajax({
            url: `${API_URL}/mobile/fingerprint`,
            method: "POST",
            data: {
                key: publicKeyCredential,
            },
            success: (data) => {
                handlePreloader();
                $("#span-infos-splash").remove();
                Toast.fire({
                    text: `${data.message}`,
                    icon: "success",
                });
            },
            error: (err) => {
                $("#span-infos-splash").remove();
                handlePreloader();
                console.error(err);
            },
        });
    };

    // Function to convert an ArrayBuffer to a base64 URL-encoded string
    var arrayBufferToBase64Url = (buffer) => {
        const byteArray = new Uint8Array(buffer);
        const base64 = btoa(String.fromCharCode.apply(null, byteArray));
        return base64
            .replace(/\+/g, "-")
            .replace(/\//g, "_")
            .replace(/=+$/, "");
    };

    var biometricLogin = () => {
        if (window.location.pathname == "/entrar") {
            let fingerprint = localStorage.getItem("fingerprint");
            if (fingerprint == "true") {
                loginFinger = true;
                handleBiometric();
            }
        }
    };

    //Seta informações globais do usuário na aplicação
    var handleUserInfos = () => {
        if (
            localStorage.getItem("infos") != "undefined" ||
            localStorage.getItem("infos") != undefined
        ) {
            let user = null;
            try {
                user = JSON.parse(localStorage.getItem("infos"));
            } catch (error) {
                console.error(error);
                if (
                    window.location.pathname != "/entrar" &&
                    window.location.pathname != "/cadastro"
                ) {
                    window.location.href = "/sair";
                }
            }
            if (user != null) {
                let nome =
                    user.cidadao.cdo_nomesocial != ""
                        ? user.cidadao.cdo_nomesocial
                        : user.usu_nome;
                $(".dz-info .user-name").text(nome);
                $(".user-avatar").attr(
                    "src",
                    `https://gestiss.sertsoft.com.br/storage/usuarios_images/${user.usu_foto}`
                );
            }
        }
    };

    // Recent Search
    var handleSearch = function () {
        $(".search-input .form-control").on("change paste keyup", function () {
            if ($(this).val().length > 0) {
                $(".search-input .btn-close").fadeIn(500);
            } else {
                $(".search-input .btn-close").fadeOut(500);
            }
        });
        $(".search-input .btn-close").on("click", function () {
            $(".search-input .form-control").val(null);
            $(this).fadeOut(0);
        });
    };

    var handleRemoveClass = function () {
        $(".nav-color").on("click", function () {
            $(".sidebar, .menu-toggler").removeClass("show");
        });
    };

    var handleToggleButton = function () {
        $(".dz-treeview-item").on("click", function () {
            $(this).toggleClass("open");
        });
    };

    //Light Gallery ============
    var handleLightgallery = function () {
        if ($("#lightgallery").length > 0) {
            lightGallery(document.getElementById("lightgallery"), {
                plugins: [lgZoom, lgThumbnail],
            });
        }
    };

    //Tab Slide ============
    var handleTabSlide = function () {
        if ($(".tab-slide-effect").length > 0) {
            var a = $(".tab-slide-effect li.active").width();
            var b = $(".tab-slide-effect li.active").position().left;
            $(".tab-active-indicator").css({
                width: a,
                transform: "translateX(" + b + "px)",
            });
            $(".tab-slide-effect li").on("click", function () {
                var tabItem = $(this).parent().find("li");
                $(tabItem).removeClass("active");
                $(this).addClass("active");
                var x = $(this).width();
                var y = $(this).position().left;
                var indicator = $(this).parent().find(".tab-active-indicator");
                $(indicator).css({
                    width: x,
                    transform: "translateX(" + y + "px)",
                });
            });
        }
    };

    //Nav Menu ============
    var handleNavMenu = function () {
        $(".navbar-nav > li > a, .sub-menu > li > a")
            .unbind()
            .on("click", function (e) {
                if ($(this).parent().hasClass("open")) {
                    $(this).parent().removeClass("open");
                    $(this).next().slideUp();
                } else {
                    $(this).parent().parent().find("li .sub-menu").slideUp();
                    $(this).next().slideDown();
                    $(this).parent().parent().find("li").removeClass("open");
                    $(this).parent().addClass("open");
                }
            });
    };

    var handleOtp = function () {
        if ($("#otp").length > 0)
            $(".digit-group")
                .find("input")
                .each(function () {
                    $(this).attr("maxlength", 1);
                    $(this).on("keyup", function (e) {
                        var thisVal = $(this).val();
                        var parent = $($(this).parent());

                        if (e.keyCode === 8 || e.keyCode === 37) {
                            var prev = parent.find(
                                "input#" + $(this).data("previous")
                            );

                            if (prev.length) {
                                $(prev).select();
                            }
                        } else {
                            var next = parent.find(
                                "input#" + $(this).data("next")
                            );

                            if (!$.isNumeric(thisVal)) {
                                $(this).val("");
                                return false;
                            }

                            if (next.length) {
                                $(next).select();
                            } else {
                                if (parent.data("autosubmit")) {
                                    parent.submit();
                                }
                            }
                        }
                    });
                });
    };

    var handleIconMenu = () => {
        $(".menubar-area > .menubar-nav > .active > i").addClass("fa-xl");
    };

    function getCodeBoxElement(index) {
        return document.getElementById("codeBox" + index);
    }
    function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
            if (index !== 4) {
                getCodeBoxElement(index + 1).focus();
            } else {
                getCodeBoxElement(index).blur();
            }
        }
        if (eventCode === 8 && index !== 1) {
            getCodeBoxElement(index - 1).focus();
        }
    }
    function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
            const currentElement = getCodeBoxElement(item);
            if (!currentElement.value) {
                currentElement.focus();
                break;
            }
        }
    }

    /* Function ============ */
    return {
        init: function () {
            handleMenubar();
            handleToggleButton();
            handleShowPass();
            handleIsFixed();
            handleScrollTop();
            handleLightgallery();
            handleCustomFileInput();
            handleNavMenu();
            handleMessageHandle();
            handleGoBack();
            handlePWAModal();
            handleSearch();
            handleRemoveClass();
            handleTabSlide();
            handleOtp();
            handleHour();
            handleIconMenu();
            handleUserInfos();
            handleIntall();
            //handleBiometric();
            //biometricLogin();
        },

        load: function () {
            handlePreloader();
            handleSelectpicker();
        },

        resize: function () {
            screenWidth = $(window).width();
        },
    };
})();

/* Document.ready Start */
jQuery(() => {
    $('[data-bs-toggle="popover"]').popover();
    ("use strict");
    Gestiss.init();

    $(".theme-dark .custom-switch input").prop("checked", true);
});
/* Document.ready END */

/* Window Load START */
$(window).on("load", function () {
    "use strict";
    Gestiss.load();
    setTimeout(function () {
        $("#splashscreen").addClass("active");
        $("#splashscreen").fadeOut(2000);
    }, 2000);

    $(".theme-dark .custom-switch input")
        .prop("checked", true)
        .addClass("active");
});
/*  Window Load END */

/* Window Resize START */
$(window).on("resize", function () {
    "use strict";
    Gestiss.resize();
});
/*  Window Resize END */
