<div class="sidebar">
    <div class="author-box">
        <div class="dz-media">
            <img src="https://gestiss.sertsoft.com.br/storage/usuarios_images/45-img.jpg"
                class="rounded-circle user-avatar" alt="author-image">
        </div>
        <div class="dz-info">
            <span></span>
            <h5 class="name user-name"></h5>
        </div>
    </div>
    <ul class="nav navbar-nav">
        <li class="nav-label">Menu</li>

        <li>
            <a class="nav-link" href="{{ route('painel') }}">
                <span class="dz-icon bg-pink light">
                    <i class="fa-duotone fa-house"></i>
                </span>
                <span>Painel</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="{{ route('atendimentos') }}">
                <span class="dz-icon bg-orange light">
                    <i class="fa-duotone fa-stethoscope"></i>
                </span>
                <span>Atendimentos</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="{{ route('prescricoes') }}">
                <span class="dz-icon bg-skyblue light">
                    <i class="fa-solid fa-prescription-bottle-pill"></i>
                </span>
                <span>Prescrições</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="notification.html">
                <span class="dz-icon bg-green light">
                    <i class="fa-duotone fa-calendar"></i>
                </span>
                <span>Agendamentos</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="profile.html">
                <span class="dz-icon bg-yellow light">
                    <i class="fa-duotone fa-video"></i>
                </span>
                <span>Video Chamada</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="messages.html">
                <span class="dz-icon bg-skyblue light">
                    <i class="fa-duotone fa-user"></i>
                </span>
                <span>Perfil</span>
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('logout') }}">
                <span class="dz-icon bg-red light">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                        height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                fill="#fff" fill-rule="nonzero" opacity="0.3"
                                transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) " />
                            <rect fill="#ff4db8" opacity="0.3"
                                transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                x="13" y="6" width="2" height="12" rx="1" />
                            <path
                                d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                fill="#fff" fill-rule="nonzero"
                                transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) " />
                        </g>
                    </svg>
                </span>
                <span>Logout</span>
            </a>
        </li>

        <li class="nav-label">Configurações</li>

        <li class="nav-color">
            <a class="nav-link">
                <span class="dz-icon bg-blue light">
                    <i class="fa-duotone fa-fingerprint"></i>
                </span>
                <span>Habilitar Digital</span>
            </a>
        </li>

        <li>
            <div class="mode">
                <span class="dz-icon bg-green light">
                    <i class="fa-solid fa-moon"></i>
                </span>
                <span>Dark Mode</span>
                <div class="custom-switch">
                    <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                    <label class="custom-switch-label" for="toggle-dark-menu"></label>
                </div>
            </div>
        </li>
    </ul>
    <div class="sidebar-bottom">
        <h6 class="name">GESTISS APP</h6>
        <p>Versão 1.0</p>
    </div>
</div>
