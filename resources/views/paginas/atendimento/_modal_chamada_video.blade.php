<div class="modal fade" id="modalVideoChamada" tabindex="-1" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row row-video" style="z-index: 9999;">
                    <div class="col-4 offset-4">
                        <div class="card">
                            <div id="local_video_div" style="max-width: 240px;max-height: 240px;" class="col-12">
                            </div>
                            <div id="multi_video_container_div"></div>
                            <div class="row" id="controls-div" style="display: none">
                                <div class="controls" id="controls"
                                    style="position: absolute;bottom: 0%;left: 95%;width:100%;text-align: center;z-index: 10000">
                                    <img src="{{ asset('/images/video/mike.png') }}"
                                        style="max-width : 40px;cursor: pointer;" class="cus_img_icon icon-confo-mute"
                                        onclick="audioMute()" title="Mutar o áudio" />
                                    <img src="{{ asset('/images/video/video.png') }}"
                                        style="max-width : 40px;cursor: pointer;"
                                        class="cus_img_icon icon-confo-video-mute" title="Fechar a câmera"
                                        onclick="videoMute()" />
                                    <img src="{{ asset('/images/video/end-call.png') }}"
                                        style="max-width : 40px;cursor: pointer;" class="cus_img_icon end_call"
                                        title="Finalizar Chamada" onclick="endCall()" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
