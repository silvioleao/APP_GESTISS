///////////////////////////////////////////////////////
//
// File: confo.js
// This is the main conference application file for client end point. It tries to use Enablex Web Toolkit to
// communicate with EnableX Servers
//
// Last Updated: 29-11-2018
// Reformat, Indentation, Inline Comments
//
/////////////////////////////////////////////////////
var localStream = null;
var username = null;
var token = null;
var room;
// Player Options
var options = {
    id: "vcx_1001",
    attachMode: "",
    player: {
        autoplay: "autoplay",
        name: "",
        nameDisplayMode: "",
        frameFitMode: "bestFit",
        skin: "default",
        class: "",
        height: "240px",
        width: "320px",
        minHeight: "250px",
        minWidth: "350px",
        aspectRatio: "9:16",
        volume: 5,
        loader: {
            show: false,
            url: "/images/video/loader.gif",
            style: "default",
            class: "",
        },
        backgroundImg: "/images/video/player-bg.gif",
    },
    toolbar: {
        displayMode: "auto",
        autoDisplayTimeout: 0,
        position: "bottom",
        skin: "default",
        iconset: "default",
        class: "",
        buttons: {
            play: false,
            share: true,
            mic: true,
            resize: false,
            volume: false,
            mute: false,
            record: false,
            playtime: false,
            zoom: false,
        },
        /*  branding: {
            display: false,
            clickthru: "https://www.enablex.io",
            target: "new",
            logo: "img/enablex.png",
            title: "EnableX",
            position: "right",
        }, */
    },
};

function initVideo(roomId) {
    var name = "Cidadão";
    // Local Stream Definition
    var config = {
        audio: true,
        video: true,
        data: true,
        videoSize: [480, 640, 950, 950],
        options: options,
        attributes: {
            name: name,
        },
    };

    var countStream = 0;

    var setLiveStream = function (stream) {
        // Listening to Text Data
        stream.addEventListener("stream-data", function (e) {
            var text = e.msg.textMessage;
            var html = $(".multi_text_container_div").html();
            $("#multi_text_container_div").html(html + text + "<br>");
        });

        if (!stream.local) {
            var newStreamDiv = document.createElement("div");
            newStreamDiv.setAttribute("id", "liveStream_" + countStream);
            newStreamDiv.setAttribute(
                "class",
                "live_stream_div col-md-3 col-sm-3"
            );
            var multi_video_div = document.getElementById(
                "multi_video_container_div"
            );
            multi_video_div.appendChild(newStreamDiv);
            options.player.height = "inherit";
            options.player.width = "inherit";
            options.player.class = "test_class";

            stream.show("liveStream_" + countStream, options);
            countStream++;
        } else {
            options.player.height = "90px";
            options.player.width = "90px";
            options.player.loader.class = "";
            options.player.loader.show = false;
            var controlsDiv = document.getElementById("controls-div");
            controlsDiv.style.display = "block";
            stream.show("local_video_div", options);
        }
    };

    // Function: Create Token
    createToken(roomId, function (response) {
        token = response;
        var ATList = null;

        // JOin Room
        localStream = EnxRtc.joinRoom(token, config, function (success, error) {
            if (error && error != null) {
            }
            if (success && success != null) {
                room = success.room;
                var ownId = success.publishId;
                setLiveStream(localStream);
                for (var i = 0; i < success.streams.length; i++) {
                    room.subscribe(success.streams[i]);
                }

                // Active Talker list is updated
                room.addEventListener(
                    "active-talkers-updated",
                    function (event) {
                        ATList = event.message.activeList;
                        document
                            .querySelectorAll(".classic_vcx_stream")
                            .forEach(function (item) {
                                item.classList.remove("border-b-active");
                            });
                        var video_player_len = document.querySelector(
                            "#multi_video_container_div"
                        ).childNodes;
                        if (
                            event.message &&
                            event.message !== null &&
                            event.message.activeList &&
                            event.message.activeList !== null
                        ) {
                            if (ATList.length == video_player_len.length) {
                                return;
                            } else {
                                document.querySelector(
                                    "#multi_video_container_div"
                                ).innerHTML = "";
                                for (stream in room.remoteStreams.getAll()) {
                                    var st =
                                        room.remoteStreams.getAll()[stream];
                                    for (j = 0; j < ATList.length; j++) {
                                        if (ATList[j].streamId == st.getID()) {
                                            setLiveStream(st);
                                        }
                                    }
                                }
                            }
                        }

                        if (ATList !== null && ATList.length) {
                            var active_talker_stream = ATList[0].streamId;

                            document
                                .getElementById("stream" + active_talker_stream)
                                .classList.add("border-b-active");
                        }
                        console.log(
                            "Active Talker List :- " + JSON.stringify(event)
                        );
                    }
                );

                // Stream has been subscribed successfully
                room.addEventListener(
                    "stream-subscribed",
                    function (streamEvent) {
                        var stream =
                            streamEvent.data && streamEvent.data.stream
                                ? streamEvent.data.stream
                                : streamEvent.stream;
                        for (k = 0; k < ATList.length; k++) {
                            if (ATList[k].streamId == stream.getID()) {
                                setLiveStream(stream);
                            }
                        }
                    }
                );

                // Listening to Incoming Data
                room.addEventListener("active-talker-data-in", function (data) {
                    console.log("active-talker-data-in" + data);
                    var obj = {
                        msg: data.message.message,
                        timestamp: data.message.timestamp,
                        username: data.message.from,
                    };
                    plotChat(obj);
                });

                // Stream went out of Room
                room.addEventListener("stream-removed", function (event) {
                    console.log(event);
                });
            }
        });
    });
}

function audioMute() {
    var elem = document.getElementsByClassName("icon-confo-mute")[0];
    var onImgPath = "/images/video/mike.png",
        onImgName = "mike.png";
    var offImgPath = "/images/video/mute-mike.png",
        offImgName = "mute-mike.png";
    var currentImgPath = elem.src.split("/")[elem.src.split("/").length - 1];
    if (currentImgPath === offImgName) {
        localStream.unmuteAudio(function (arg) {
            elem.src = onImgPath;
            elem.title = "Desligar microfone";
        });
    } else if (currentImgPath === onImgName) {
        localStream.muteAudio(function (arg) {
            elem.src = offImgPath;
            elem.title = "Ligar microfone";
        });
    }
}
function videoMute() {
    var elem = document.getElementsByClassName("icon-confo-video-mute")[0];
    var onImgPath = "/images/video/video.png",
        onImgName = "video.png";
    var offImgPath = "/images/video/mute-video.png",
        offImgName = "mute-video.png";
    var currentImgPath = elem.src.split("/")[elem.src.split("/").length - 1];
    if (currentImgPath === offImgName) {
        localStream.unmuteVideo(function (res) {
            var streamId = localStream.getID();
            var player = document.getElementById("stream" + streamId);
            player.srcObject = localStream.stream;
            player.play();
            elem.src = onImgPath;
            elem.title = "Fechar a câmera";
        });
    } else if (currentImgPath === onImgName) {
        localStream.muteVideo(function (res) {
            elem.src = offImgPath;
            elem.title = "Abrir a câmera";
        });
    }
}

function endCall() {
    videoMute();
    room.disconnect();
    $(".row-video").attr("hidden", true);
}

var createToken = function (roomId, callback) {
    var apiUrl = `${API_URL}/telemedicina/create-token-mob?sala_id=${roomId}`;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if (response.error) {
                Toast.fire({
                    text: response.error,
                    icon: "error",
                });
            } else {
                callback(response.token);
            }
        }
    };

    let value = `; ${document.cookie}`;
    let parts = value.split(`; token=`);
    let tokenCookie = "";
    if (parts.length === 2) tokenCookie = parts.pop().split(";").shift();
    xhttp.open("GET", apiUrl, true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.setRequestHeader("Authorization", `Bearer ${tokenCookie}`);
    xhttp.send();
};
