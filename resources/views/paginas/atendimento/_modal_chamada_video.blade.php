<div class="modal fade" id="modalVideoChamada" tabindex="-1" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Telesaúde</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="row row-video" style="z-index: 9999;">
                    <div class="card">
                        <div class="row">
                            <div class="col-12">
                                <div id="local_video_div" style="max-width: 40vw;max-height: 60vh;" class="col-12">
                                </div>
                            </div>

                            <div class="col-12">
                                <div id="multi_video_container_div" style="max-width: 40vw;max-height: 40vh;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="controls-div" style="display: none;">
                    <div class="controls" id="controls">

                        <img src="{{ asset('/images/video/mike.png') }}" style="cursor: pointer;"
                            class="cus_img_icon icon-confo-mute" onclick="audioMute()" title="Mutar o áudio" />

                        <img src="{{ asset('/images/video/video.png') }}" style="cursor: pointer;"
                            class="cus_img_icon icon-confo-video-mute" title="Fechar a câmera" onclick="videoMute()" />

                        <img src="{{ asset('/images/video/end-call.png') }}" style="cursor: pointer;"
                            class="cus_img_icon end_call" title="Finalizar Chamada" data-bs-dismiss="modal"
                            onclick="endCall()" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
