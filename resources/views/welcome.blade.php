<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#2196f3">
    <meta name="author" content="DexignZone" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:title" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:description" content="Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:image" content="https://jobie.dexignzone.com/mobile-app/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/icon.png') }}" />
    <!-- Title -->
    <title>Jobie - Job Portal Mobile App Template ( Bootstrap 5 + PWA )</title>
    <!-- PWA Version -->
    <link rel="manifest" href="manifest.json">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.min.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    @laravelPWA
</head>

<body>
    <div class="page-wraper">
        <!-- Header -->
        <header class="header transparent">
            <div class="main-bar">
                <div class="container">
                    <div class="header-content">
                        <div class="left-content">
                            <a href="javascript:void(0);" class="menu-toggler">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z"
                                        fill="#a19fa8" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                        fill="#a19fa8" />
                                </svg>
                            </a>
                        </div>
                        <div class="mid-content"></div>
                        <div class="right-content">
                            <a href="javascript:void(0);" class="theme-color" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                                <svg class="color-plate" enable-background="new 0 0 512.214 512.214" height="24"
                                    viewBox="0 0 512.214 512.214" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Color_Palette_1_">
                                        <g>
                                            <path
                                                d="m247.523 512.214c-1.552 0-3.111-.04-4.68-.12-18.018-.919-36.245-3.725-54.178-8.339-92.826-23.89-161.982-96.467-182.181-189.601-9.88-45.557-8.432-90.341 4.304-133.109 23.822-80.001 86.489-145.327 170.276-170.276 42.766-12.735 87.55-14.183 133.108-4.303 93.122 20.195 165.672 89.343 189.565 182.18 4.615 17.933 7.421 36.161 8.339 54.177 1.854 36.362-17.939 68.259-51.657 83.242-34.298 15.243-73.443 8.112-99.723-18.167-15.537-15.538-37.242-15.538-52.779 0-15.611 15.597-15.676 37.153-.007 52.811.003.002.004.004.006.006 26.278 26.278 33.41 65.42 18.168 99.721-14.337 32.263-44.159 51.778-78.561 51.778zm7.237-472.209c-57.565 0-111.211 21.694-152.127 62.61-52.797 52.797-73.594 126.81-57.058 203.062 16.995 78.361 75.644 139.417 153.059 159.341 15.342 3.948 30.9 6.347 46.245 7.129 19.745 1.012 36.427-9.444 44.651-27.953 6.736-15.161 7.675-37.622-9.898-55.194-31.279-31.26-31.212-78.199.007-109.391 31.161-31.163 78.172-31.165 109.343.006 17.572 17.573 40.033 16.634 55.194 9.898 18.509-8.225 28.959-24.917 27.953-44.652-.782-15.344-3.181-30.902-7.13-46.244-23.476-91.222-104.657-158.612-210.239-158.612z" />
                                        </g>
                                        <g>
                                            <path
                                                d="m156.197 396.178c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z" />
                                        </g>
                                        <g>
                                            <path
                                                d="m156.197 236.179c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z" />
                                        </g>
                                        <g>
                                            <path
                                                d="m316.197 216.179c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm0-80c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20z" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="javascript:void(0);" class="theme-btn">
                                <svg class="dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                                <svg class="light" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="author-box">
                <div class="dz-media">
                    <img src="{{ asset('images/author/pic1.png') }}" class="rounded-circle" alt="author-image">
                </div>
                <div class="dz-info">
                    <span>Good Morning</span>
                    <h5 class="name">Henry Kanwil</h5>
                </div>
            </div>
            <ul class="nav navbar-nav">
                <li class="nav-label">Main Menu</li>
                <li>
                    <a class="nav-link" href="welcome.html">
                        <span class="dz-icon bg-red light">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M11.776 21.8374C9.49294 20.4273 7.37064 18.7645 5.44791 16.8796C4.09052 15.5338 3.05388 13.8905 2.41718 12.0753C1.27955 8.53523 2.60383 4.48948 6.30113 3.2884C8.25264 2.67553 10.3751 3.05175 12.0071 4.29983C13.6397 3.05315 15.7614 2.67705 17.713 3.2884C21.4103 4.48948 22.7435 8.53523 21.6058 12.0753C20.9743 13.8888 19.9438 15.5319 18.5929 16.8796C16.6684 18.7625 14.5463 20.4251 12.2648 21.8374L12.016 22L11.776 21.8374Z"
                                    fill="white" />
                                <path
                                    d="M12.0109 22L11.776 21.8374C9.49013 20.4274 7.36487 18.7647 5.43902 16.8796C4.0752 15.5356 3.03238 13.8922 2.39052 12.0753C1.26177 8.53523 2.58605 4.48948 6.28335 3.2884C8.23486 2.67553 10.3853 3.05204 12.0109 4.31057V22Z"
                                    fill="white" />
                                <path
                                    d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span>Welcome</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="index.html">
                        <span class="dz-icon bg-pink light">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                    fill="#130F26" />
                            </svg>
                        </span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="pages.html">
                        <span class="dz-icon bg-orange light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="20" height="20" viewBox="0 0 24 24" version="1.1"
                                class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                        fill="#fff" fill-rule="nonzero" />
                                    <path
                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                        fill="#fff" opacity="0.5" />
                                </g>
                            </svg>
                        </span>
                        <span>Pages</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="ui-components.html">
                        <span class="dz-icon bg-skyblue light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="18" viewBox="0 0 24 24" version="1.1"
                                class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#00aeff" x="4" y="4" width="7"
                                        height="7" rx="1.5" />
                                    <path
                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                        fill="#fff" opacity="0.5" />
                                </g>
                            </svg>
                        </span>
                        <span>Components</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="notification.html">
                        <span class="dz-icon bg-green light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="18" viewBox="0 0 24 24" version="1.1"
                                class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path
                                        d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z"
                                        fill="#fff" />
                                    <rect fill="#fff" opacity="0.3" x="10" y="16"
                                        width="4" height="4" rx="2" />
                                </g>
                            </svg>
                        </span>
                        <span>Notification</span>
                        <span class="badge badge-circle badge-danger">1</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="profile.html">
                        <span class="dz-icon bg-yellow light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="18" viewBox="0 0 24 24" version="1.1"
                                class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                        fill="#fff" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                        fill="#fff" fill-rule="nonzero" />
                                </g>
                            </svg>
                        </span>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="messages.html">
                        <span class="dz-icon bg-skyblue light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="18" viewBox="0 0 24 24" version="1.1"
                                class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L6,18 C4.34314575,18 3,16.6568542 3,15 L3,6 C3,4.34314575 4.34314575,3 6,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z"
                                        fill="#fff" opacity="0.3" />
                                    <path
                                        d="M7.5,12 C6.67157288,12 6,11.3284271 6,10.5 C6,9.67157288 6.67157288,9 7.5,9 C8.32842712,9 9,9.67157288 9,10.5 C9,11.3284271 8.32842712,12 7.5,12 Z M12.5,12 C11.6715729,12 11,11.3284271 11,10.5 C11,9.67157288 11.6715729,9 12.5,9 C13.3284271,9 14,9.67157288 14,10.5 C14,11.3284271 13.3284271,12 12.5,12 Z M17.5,12 C16.6715729,12 16,11.3284271 16,10.5 C16,9.67157288 16.6715729,9 17.5,9 C18.3284271,9 19,9.67157288 19,10.5 C19,11.3284271 18.3284271,12 17.5,12 Z"
                                        fill="#fff" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <span>Chat</span>
                        <span class="badge badge-circle badge-info">5</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="onboading.html">
                        <span class="dz-icon bg-red light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="18" viewBox="0 0 24 24" version="1.1"
                                class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                        fill="#fff" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) " />
                                    <rect fill="#ff4db8" opacity="0.3"
                                        transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                        x="13" y="6" width="2" height="12"
                                        rx="1" />
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
                <li class="sub-menu-down">
                    <a class="nav-link" href="javascript:void(0);">
                        <span class="dz-icon bg-red light">
                            <svg height="18" viewBox="0 0 512 512" width="18"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="_40_Sidemenu" data-name="40 Sidemenu">
                                    <g fill="#a9defc">
                                        <rect height="105.52" rx="24" width="231.61" x="34.56"
                                            y="80.54" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56"
                                            y="203.24" />
                                        <rect height="105.52" rx="24" width="231.61" x="34.56"
                                            y="325.94" />
                                    </g>
                                    <path
                                        d="m309.41 501h-274.85a20.46 20.46 0 0 1 0-40.91h254.44v-408.18h-254.44a20.46 20.46 0 0 1 0-40.91h274.85a20.46 20.46 0 0 1 20.46 20.46v449.08a20.46 20.46 0 0 1 -20.46 20.46z"
                                        fill="#f5d367" />
                                    <path
                                        d="m491.92 241.44c-1.43-1.44-74.62-73.44-74.62-73.44a20.46 20.46 0 0 0 -28.93 29l59.55 59.55-59.55 59.55a20.46 20.46 0 0 0 28.93 28.9s73.19-72 74.62-73.41a22 22 0 0 0 0-30.14z"
                                        fill="#f5d367" />
                                    <path
                                        d="m123.85 431.47h-65.29a24 24 0 0 1 -24-24v-57.53a24 24 0 0 1 11.65-20.58 501.22 501.22 0 0 0 77.64 102.11z"
                                        fill="#a2d4ea" />
                                    <path
                                        d="m209.31 501h-174.75a20.46 20.46 0 1 1 0-40.91h120a499.3 499.3 0 0 0 54.75 40.91z"
                                        fill="#e2c061" />
                                </g>
                            </svg>
                        </span>
                        <span>One Level (Mulitilevel)</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-down">
                            <a href="javascript:void(0);">Two Level</a>
                            <ul class="sub-menu">
                                <li class="sub-menu-down">
                                    <a href="javascript:void(0);">Three Level</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0);">Menu 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Menu 2</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Menu 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Menu 2</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Menu 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Menu 2</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Menu 3</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-label">Settings</li>
                <li class="nav-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                    aria-controls="offcanvasBottom">
                    <a class="nav-link">
                        <span class="dz-icon bg-blue light">
                            <i class="fa-solid fa-palette"></i>
                        </span>
                        <span>Highlights</span>
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
                <h6 class="name">Jobie - Job Portal</h6>
                <p>App Version 1.0</p>
            </div>
        </div>
        <!-- Sidebar End -->
        <!-- Banner -->
        <div class="banner-wrapper author-notification">
            <div class="container inner-wrapper">
                <div class="dz-info">
                    <span>Good Morning</span>
                    <h2 class="name mb-0">Henry Kanwil</h2>
                </div>
                <div class="dz-media media-45 rounded-circle">
                    <a href="profile.html">
                        <img src="{{ asset('images/author/pic1.png') }}" class="rounded-circle" alt="author-image">
                    </a>
                </div>
            </div>
        </div>
        <!-- Banner End -->
        <!-- Page Content -->
        <div class="page-content">
            <div class="content-inner pt-0">
                <div class="container fb">
                    <!-- Search -->
                    <form class="m-b30">
                        <div class="input-group">
                            <span class="input-group-text">
                                <a href="javascript:void(0);" class="search-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M20.5605 18.4395L16.7528 14.6318C17.5395 13.446 18 12.0262 18 10.5C18 6.3645 14.6355 3 10.5 3C6.3645 3 3 6.3645 3 10.5C3 14.6355 6.3645 18 10.5 18C12.0262 18 13.446 17.5395 14.6318 16.7528L18.4395 20.5605C19.0245 21.1462 19.9755 21.1462 20.5605 20.5605C21.1462 19.9748 21.1462 19.0252 20.5605 18.4395ZM5.25 10.5C5.25 7.605 7.605 5.25 10.5 5.25C13.395 5.25 15.75 7.605 15.75 10.5C15.75 13.395 13.395 15.75 10.5 15.75C7.605 15.75 5.25 13.395 5.25 10.5Z"
                                            fill="#B9B9B9" />
                                    </svg>
                                </a>
                            </span>
                            <input type="text" placeholder="Search job here..." class="form-control ps-0 bs-0">
                        </div>
                    </form>
                    <!-- Dashboard Area -->
                    <div class="dashboard-area">
                        <!-- Features -->
                        <div class="features-box">
                            <div class="row m-b20 g-3">
                                <div class="col">
                                    <div class="card card-bx card-content bg-primary">
                                        <div class="card-body">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="50"
                                                height="50" viewBox="0 0 24 24" version="1.1"
                                                class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24"
                                                        height="24" />
                                                    <path
                                                        d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z"
                                                        fill="#fff" />
                                                    <path
                                                        d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z"
                                                        fill="#fff" fill-rule="nonzero" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <div class="card-info">
                                                <h4 class="title">29</h4>
                                                <p>Jobs Applied</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-bx card-content bg-secondary">
                                        <div class="card-body">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="50"
                                                height="50" viewBox="0 0 24 24" version="1.1"
                                                class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24"
                                                        height="24" />
                                                    <path
                                                        d="M12,2 C13.8385982,2 15.5193947,3.03878936 16.3416408,4.68328157 L19,10 C20.365323,12.730646 19.25851,16.0510849 16.527864,17.4164079 C15.7602901,17.8001948 14.9139019,18 14.0557281,18 L9.94427191,18 C6.8913169,18 4.41640786,15.525091 4.41640786,12.472136 C4.41640786,11.6139622 4.61621302,10.767574 5,10 L7.65835921,4.68328157 C8.48060532,3.03878936 10.1614018,2 12,2 Z M7.55,13.6 C9.00633458,14.6922509 10.4936654,15.25 12,15.25 C13.5063346,15.25 14.9936654,14.6922509 16.45,13.6 L15.55,12.4 C14.3396679,13.3077491 13.1603321,13.75 12,13.75 C10.8396679,13.75 9.66033208,13.3077491 8.45,12.4 L7.55,13.6 Z"
                                                        fill="#fff" />
                                                    <path
                                                        d="M6.15999985,21.0604779 L8.15999985,17.5963763 C8.43614222,17.1180837 9.04773263,16.9542085 9.52602525,17.2303509 C10.0043179,17.5064933 10.168193,18.1180837 9.89205065,18.5963763 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 Z M17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L14.1000004,18.5660262 C13.823858,18.0877335 13.9877332,17.4761431 14.4660258,17.2000008 C14.9443184,16.9238584 15.5559088,17.0877335 15.8320512,17.5660262 L17.8320512,21.0301278 Z"
                                                        fill="#fff" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <div class="card-info">
                                                <h4 class="title">3</h4>
                                                <p>Interviews</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Features End -->
                        <!-- Categorie -->
                        <div class="categorie-section">
                            <div class="title-bar">
                                <h5 class="dz-title">Categories</h5>
                            </div>
                            <ul class="d-flex align-items-center">
                                <li>
                                    <a href="search.html" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z"
                                                    fill="#000000" />
                                                <path
                                                    d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="btn">
                                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M19.9925 18.9533H14.2982C13.7426 18.9533 13.2908 19.4123 13.2908 19.9766C13.2908 20.5421 13.7426 21 14.2982 21H19.9925C20.548 21 20.9999 20.5421 20.9999 19.9766C20.9999 19.4123 20.548 18.9533 19.9925 18.9533Z"
                                                fill="#130F26" />
                                            <path
                                                d="M10.309 6.90388L15.7049 11.264C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8345 7.72908 20.8452L4.23696 20.8882C4.05071 20.8904 3.88775 20.7614 3.84542 20.5765L3.05175 17.1258C2.91419 16.4916 3.05175 15.8358 3.45388 15.3306L9.88256 6.95548C9.98627 6.82111 10.1778 6.79746 10.309 6.90388Z"
                                                fill="#130F26" />
                                            <path opacity="0.4"
                                                d="M18.1205 8.66544L17.0803 9.96401C16.9755 10.0962 16.7872 10.1177 16.657 10.0124C15.3924 8.98901 12.1543 6.36285 11.2559 5.63509C11.1247 5.52759 11.1067 5.33625 11.2125 5.20295L12.2157 3.95706C13.1257 2.78534 14.7131 2.67784 15.9935 3.69906L17.4644 4.87078C18.0676 5.34377 18.4698 5.96726 18.6073 6.62299C18.7661 7.3443 18.5967 8.0527 18.1205 8.66544Z"
                                                fill="#130F26" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M10.5857864,12 L5.46446609,6.87867966 C5.0739418,6.48815536 5.0739418,5.85499039 5.46446609,5.46446609 C5.85499039,5.0739418 6.48815536,5.0739418 6.87867966,5.46446609 L12,10.5857864 L18.1923882,4.39339828 C18.5829124,4.00287399 19.2160774,4.00287399 19.6066017,4.39339828 C19.997126,4.78392257 19.997126,5.41708755 19.6066017,5.80761184 L13.4142136,12 L19.6066017,18.1923882 C19.997126,18.5829124 19.997126,19.2160774 19.6066017,19.6066017 C19.2160774,19.997126 18.5829124,19.997126 18.1923882,19.6066017 L12,13.4142136 L6.87867966,18.5355339 C6.48815536,18.9260582 5.85499039,18.9260582 5.46446609,18.5355339 C5.0739418,18.1450096 5.0739418,17.5118446 5.46446609,17.1213203 L10.5857864,12 Z"
                                                    fill="#000000" opacity="0.3"
                                                    transform="translate(12.535534, 12.000000) rotate(-360.000000) translate(-12.535534, -12.000000) " />
                                                <path
                                                    d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <rect fill="#40189d" opacity="0.3"
                                                    transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) "
                                                    x="11" y="4" width="2" height="16"
                                                    rx="1" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="btn">
                                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.1528 5.55553C10.2037 5.65919 10.2373 5.77021 10.2524 5.88434L10.5308 10.0243L10.669 12.1051C10.6705 12.3191 10.704 12.5317 10.7687 12.736C10.9356 13.1326 11.3372 13.3846 11.7741 13.367L18.4313 12.9315C18.7196 12.9268 18.998 13.0346 19.2052 13.2313C19.3779 13.3952 19.4894 13.6096 19.5246 13.8402L19.5364 13.9802C19.2609 17.7949 16.4592 20.9767 12.6524 21.798C8.84555 22.6193 4.94186 20.8843 3.06071 17.5349C2.51839 16.5618 2.17965 15.4923 2.06438 14.389C2.01623 14.0624 1.99503 13.7325 2.00098 13.4025C1.99503 9.31273 4.90747 5.77696 8.98433 4.92457C9.47501 4.84816 9.95603 5.10792 10.1528 5.55553Z"
                                                fill="#130F26" />
                                            <path opacity="0.4"
                                                d="M12.8701 2.00082C17.43 2.11683 21.2624 5.39579 22.0001 9.81229L21.993 9.84488L21.9729 9.89227L21.9757 10.0224C21.9652 10.1947 21.8987 10.3605 21.784 10.4945C21.6646 10.634 21.5014 10.729 21.3217 10.7659L21.2121 10.7809L13.5313 11.2786C13.2758 11.3038 13.0214 11.2214 12.8314 11.052C12.6731 10.9107 12.5719 10.7201 12.5433 10.5147L12.0277 2.84506C12.0188 2.81913 12.0188 2.79102 12.0277 2.76508C12.0348 2.55367 12.1278 2.35384 12.2861 2.21023C12.4444 2.06662 12.6547 1.9912 12.8701 2.00082Z"
                                                fill="#130F26" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <path
                                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Categorie End -->
                        <!-- Recomended Jobs -->
                        <div class="m-b10">
                            <div class="title-bar">
                                <h5 class="dz-title">Recomended Jobs</h5>
                                <div class="swiper-defult-pagination pagination-dots style-1 p-0">
                                    <div
                                        class="swiper-defult-pagination pagination-dots style-1 p-0 swiper-pagination-clickable swiper-pagination-bullets">
                                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                            tabindex="0" role="button" aria-label="Go to slide 1"></span><span
                                            class="swiper-pagination-bullet" tabindex="0" role="button"
                                            aria-label="Go to slide 2"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-btn-center-lr">
                                <div class="swiper-container tag-group mt-4 dz-swiper recomand-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card job-post">
                                                <div class="card-body">
                                                    <div class="media media-80">
                                                        <img src="{{ asset('images/logo/logo.png') }}" alt="/">
                                                    </div>
                                                    <div class="card-info">
                                                        <h6 class="title">
                                                            <a href="javascript:void(0);">Software Engineer</a>
                                                        </h6>
                                                        <span class="location">Jakarta, Indonesia</span>
                                                        <div class="d-flex align-items-center">
                                                            <svg class="text-primary" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z"
                                                                    fill="#40189D" />
                                                            </svg>
                                                            <span class="ms-2 price-item">$500 - $1,000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card job-post">
                                                <div class="card-body">
                                                    <div class="media media-80">
                                                        <img src="{{ asset('images/logo/logo.png') }}" alt="/">
                                                    </div>
                                                    <div class="card-info">
                                                        <h6 class="title">
                                                            <a href="javascript:void(0);">Software Engineer</a>
                                                        </h6>
                                                        <span class="location">Jakarta, Indonesia</span>
                                                        <div class="d-flex align-items-center">
                                                            <svg class="text-primary" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z"
                                                                    fill="#40189D" />
                                                            </svg>
                                                            <span class="ms-2 price-item">$500 - $1,000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card job-post">
                                                <div class="card-body">
                                                    <div class="media media-80">
                                                        <img src="{{ asset('images/logo/logo.png') }}" alt="/">
                                                    </div>
                                                    <div class="card-info">
                                                        <h6 class="title">
                                                            <a href="javascript:void(0);">Software Engineer</a>
                                                        </h6>
                                                        <span class="location">Jakarta, Indonesia</span>
                                                        <div class="d-flex align-items-center">
                                                            <svg class="text-primary" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z"
                                                                    fill="#40189D" />
                                                            </svg>
                                                            <span class="ms-2 price-item">$500 - $1,000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recomended Jobs End -->
                        <!-- Recent Jobs -->
                        <div class="title-bar">
                            <h5 class="dz-title">Recent Jobs</h5>
                            <a class="btn btn-sm text-primary" href="search.html">More</a>
                        </div>
                        <div class="list item-list recent-jobs-list">
                            <ul>
                                <li>
                                    <div class="item-content">
                                        <a href="job-detail.html" class="item-media">
                                            <img src="{{ asset('images/logo/company-logo1.png') }}" width="55"
                                                alt="logo">
                                        </a>
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                <div class="item-subtitle">Highspeed Studios</div>
                                                <h6 class="item-title">
                                                    <a href="job-detail.html">Software Engineer</a>
                                                </h6>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <svg class="text-primary" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z"
                                                        fill="#40189D" />
                                                </svg>
                                                <div class="item-price">$500 - $1,000</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <svg class="text-primary" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M0.000244141 9.07849C0.0502441 11.4165 0.190244 15.4155 0.210244 15.8565C0.281244 16.7995 0.642244 17.7525 1.20424 18.4245C1.98624 19.3675 2.94924 19.7885 4.29224 19.7885C6.14824 19.7985 8.19424 19.7985 10.1812 19.7985C12.1762 19.7985 14.1122 19.7985 15.7472 19.7885C17.0712 19.7885 18.0642 19.3565 18.8362 18.4245C19.3982 17.7525 19.7592 16.7895 19.8102 15.8565C19.8302 15.4855 19.9302 11.1445 19.9902 9.07849H0.000244141Z"
                                                        fill="#130F26" />
                                                    <path
                                                        d="M9.24548 13.3842V14.6782C9.24548 15.0922 9.58148 15.4282 9.99548 15.4282C10.4095 15.4282 10.7455 15.0922 10.7455 14.6782V13.3842C10.7455 12.9702 10.4095 12.6342 9.99548 12.6342C9.58148 12.6342 9.24548 12.9702 9.24548 13.3842Z"
                                                        fill="#130F26" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.21137 12.5564C8.11137 12.9194 7.76237 13.1514 7.38437 13.1014C4.83337 12.7454 2.39537 11.8404 0.337366 10.4814C0.126366 10.3434 0.000366211 10.1074 0.000366211 9.8554V6.3894C0.000366211 4.2894 1.71237 2.5814 3.81737 2.5814H5.78437C5.97237 1.1294 7.20237 0.000396729 8.70437 0.000396729H11.2864C12.7874 0.000396729 14.0184 1.1294 14.2064 2.5814H16.1834C18.2824 2.5814 19.9904 4.2894 19.9904 6.3894V9.8554C19.9904 10.1074 19.8634 10.3424 19.6544 10.4814C17.5924 11.8464 15.1444 12.7554 12.5764 13.1104C12.5414 13.1154 12.5074 13.1174 12.4734 13.1174C12.1344 13.1174 11.8314 12.8884 11.7464 12.5524C11.5444 11.7564 10.8214 11.1994 9.99037 11.1994C9.14837 11.1994 8.43337 11.7444 8.21137 12.5564ZM11.2864 1.5004H8.70437C8.03137 1.5004 7.46937 1.9604 7.30137 2.5814H12.6884C12.5204 1.9604 11.9584 1.5004 11.2864 1.5004Z"
                                                        fill="#130F26" />
                                                </svg>
                                                <div class="item-price">Jakarta, Indonesia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sortable-handler"></div>
                                </li>
                                <li>
                                    <div class="item-content">
                                        <a href="job-detail.html" class="item-media">
                                            <img src="{{ asset('images/logo/company-logo2.png') }}" width="55"
                                                alt="logo">
                                        </a>
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                <div class="item-subtitle">Lunar Djaja Corp.</div>
                                                <h6 class="item-title">
                                                    <a href="job-detail.html">Database Engineer</a>
                                                </h6>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <svg class="text-primary" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z"
                                                        fill="#40189D" />
                                                </svg>
                                                <div class="item-price">$500 - $1,000</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <svg class="text-primary" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M0.000244141 9.07849C0.0502441 11.4165 0.190244 15.4155 0.210244 15.8565C0.281244 16.7995 0.642244 17.7525 1.20424 18.4245C1.98624 19.3675 2.94924 19.7885 4.29224 19.7885C6.14824 19.7985 8.19424 19.7985 10.1812 19.7985C12.1762 19.7985 14.1122 19.7985 15.7472 19.7885C17.0712 19.7885 18.0642 19.3565 18.8362 18.4245C19.3982 17.7525 19.7592 16.7895 19.8102 15.8565C19.8302 15.4855 19.9302 11.1445 19.9902 9.07849H0.000244141Z"
                                                        fill="#130F26" />
                                                    <path
                                                        d="M9.24548 13.3842V14.6782C9.24548 15.0922 9.58148 15.4282 9.99548 15.4282C10.4095 15.4282 10.7455 15.0922 10.7455 14.6782V13.3842C10.7455 12.9702 10.4095 12.6342 9.99548 12.6342C9.58148 12.6342 9.24548 12.9702 9.24548 13.3842Z"
                                                        fill="#130F26" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.21137 12.5564C8.11137 12.9194 7.76237 13.1514 7.38437 13.1014C4.83337 12.7454 2.39537 11.8404 0.337366 10.4814C0.126366 10.3434 0.000366211 10.1074 0.000366211 9.8554V6.3894C0.000366211 4.2894 1.71237 2.5814 3.81737 2.5814H5.78437C5.97237 1.1294 7.20237 0.000396729 8.70437 0.000396729H11.2864C12.7874 0.000396729 14.0184 1.1294 14.2064 2.5814H16.1834C18.2824 2.5814 19.9904 4.2894 19.9904 6.3894V9.8554C19.9904 10.1074 19.8634 10.3424 19.6544 10.4814C17.5924 11.8464 15.1444 12.7554 12.5764 13.1104C12.5414 13.1154 12.5074 13.1174 12.4734 13.1174C12.1344 13.1174 11.8314 12.8884 11.7464 12.5524C11.5444 11.7564 10.8214 11.1994 9.99037 11.1994C9.14837 11.1994 8.43337 11.7444 8.21137 12.5564ZM11.2864 1.5004H8.70437C8.03137 1.5004 7.46937 1.9604 7.30137 2.5814H12.6884C12.5204 1.9604 11.9584 1.5004 11.2864 1.5004Z"
                                                        fill="#130F26" />
                                                </svg>
                                                <div class="item-price">London, United Kingdom</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sortable-handler"></div>
                                </li>
                                <li>
                                    <div class="item-content">
                                        <a href="job-detail.html" class="item-media">
                                            <img src="{{ asset('images/logo/company-logo3.png') }}" width="55"
                                                alt="logo">
                                        </a>
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                <div class="item-subtitle">Highspeed Studios</div>
                                                <h6 class="item-title">
                                                    <a href="job-detail.html">Software Engineer</a>
                                                </h6>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <svg class="text-primary" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z"
                                                        fill="#40189D" />
                                                </svg>
                                                <div class="item-price">$500 - $1,000</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <svg class="text-primary" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M0.000244141 9.07849C0.0502441 11.4165 0.190244 15.4155 0.210244 15.8565C0.281244 16.7995 0.642244 17.7525 1.20424 18.4245C1.98624 19.3675 2.94924 19.7885 4.29224 19.7885C6.14824 19.7985 8.19424 19.7985 10.1812 19.7985C12.1762 19.7985 14.1122 19.7985 15.7472 19.7885C17.0712 19.7885 18.0642 19.3565 18.8362 18.4245C19.3982 17.7525 19.7592 16.7895 19.8102 15.8565C19.8302 15.4855 19.9302 11.1445 19.9902 9.07849H0.000244141Z"
                                                        fill="#130F26" />
                                                    <path
                                                        d="M9.24548 13.3842V14.6782C9.24548 15.0922 9.58148 15.4282 9.99548 15.4282C10.4095 15.4282 10.7455 15.0922 10.7455 14.6782V13.3842C10.7455 12.9702 10.4095 12.6342 9.99548 12.6342C9.58148 12.6342 9.24548 12.9702 9.24548 13.3842Z"
                                                        fill="#130F26" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.21137 12.5564C8.11137 12.9194 7.76237 13.1514 7.38437 13.1014C4.83337 12.7454 2.39537 11.8404 0.337366 10.4814C0.126366 10.3434 0.000366211 10.1074 0.000366211 9.8554V6.3894C0.000366211 4.2894 1.71237 2.5814 3.81737 2.5814H5.78437C5.97237 1.1294 7.20237 0.000396729 8.70437 0.000396729H11.2864C12.7874 0.000396729 14.0184 1.1294 14.2064 2.5814H16.1834C18.2824 2.5814 19.9904 4.2894 19.9904 6.3894V9.8554C19.9904 10.1074 19.8634 10.3424 19.6544 10.4814C17.5924 11.8464 15.1444 12.7554 12.5764 13.1104C12.5414 13.1154 12.5074 13.1174 12.4734 13.1174C12.1344 13.1174 11.8314 12.8884 11.7464 12.5524C11.5444 11.7564 10.8214 11.1994 9.99037 11.1994C9.14837 11.1994 8.43337 11.7444 8.21137 12.5564ZM11.2864 1.5004H8.70437C8.03137 1.5004 7.46937 1.9604 7.30137 2.5814H12.6884C12.5204 1.9604 11.9584 1.5004 11.2864 1.5004Z"
                                                        fill="#130F26" />
                                                </svg>
                                                <div class="item-price">Medan, Indonesia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sortable-handler"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- Recent Jobs End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content End-->
        <!-- Menubar -->
        <div class="menubar-area">
            <div class="toolbar-inner menubar-nav">
                <a href="index.html" class="nav-link active">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                            fill="#130F26" />
                    </svg>
                </a>
                <a href="pages.html" class="nav-link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4"
                            d="M11.776 21.8374C9.49294 20.4273 7.37064 18.7645 5.44791 16.8796C4.09052 15.5338 3.05388 13.8905 2.41718 12.0753C1.27955 8.53523 2.60383 4.48948 6.30113 3.2884C8.25264 2.67553 10.3751 3.05175 12.0071 4.29983V4.29983C13.6397 3.05315 15.7614 2.67705 17.713 3.2884C21.4103 4.48948 22.7435 8.53523 21.6058 12.0753C20.9743 13.8888 19.9438 15.5319 18.5929 16.8796C16.6684 18.7625 14.5463 20.4251 12.2648 21.8374L12.016 22L11.776 21.8374Z"
                            fill="#a19fa8" />
                        <path
                            d="M12.0109 22L11.776 21.8374C9.49013 20.4274 7.36487 18.7647 5.43902 16.8796C4.0752 15.5356 3.03238 13.8922 2.39052 12.0753C1.26177 8.53523 2.58605 4.48948 6.28335 3.2884C8.23486 2.67553 10.3853 3.05204 12.0109 4.31057V22Z"
                            fill="#a19fa8" />
                        <path
                            d="M18.2304 9.99922V9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016V9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z"
                            fill="#a19fa8" />
                    </svg>
                </a>
                <a href="messages.html" class="nav-link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4"
                            d="M22 15.9403C22 18.7303 19.76 20.9903 16.97 21.0003H16.96H7.05C4.27 21.0003 2 18.7503 2 15.9603V15.9503C2 15.9503 2.006 11.5243 2.014 9.2983C2.015 8.8803 2.495 8.6463 2.822 8.9063C5.198 10.7913 9.447 14.2283 9.5 14.2733C10.21 14.8423 11.11 15.1633 12.03 15.1633C12.95 15.1633 13.85 14.8423 14.56 14.2623C14.613 14.2273 18.767 10.8933 21.179 8.9773C21.507 8.7163 21.989 8.9503 21.99 9.3673C22 11.5763 22 15.9403 22 15.9403Z"
                            fill="#a19fa8" />
                        <path
                            d="M21.4761 5.67369C20.6101 4.04169 18.9061 2.99969 17.0301 2.99969H7.05013C5.17413 2.99969 3.47013 4.04169 2.60413 5.67369C2.41013 6.03869 2.50213 6.4937 2.82513 6.75169L10.2501 12.6907C10.7701 13.1107 11.4001 13.3197 12.0301 13.3197C12.0341 13.3197 12.0371 13.3197 12.0401 13.3197C12.0431 13.3197 12.0471 13.3197 12.0501 13.3197C12.6801 13.3197 13.3101 13.1107 13.8301 12.6907L21.2551 6.75169C21.5781 6.4937 21.6701 6.03869 21.4761 5.67369Z"
                            fill="#a19fa8" />
                    </svg>
                </a>
                <a href="javascript:void(0);" class="menu-toggler">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4"
                            d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z"
                            fill="#a19fa8" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                            fill="#a19fa8" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- Menubar -->
        <!-- Theme Color Settings -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
            <div class="offcanvas-body small">
                <ul class="theme-color-settings">
                    <li>
                        <input class="filled-in" id="primary_color_8" name="theme_color" type="radio"
                            value="color-primary" />
                        <label for="primary_color_8"></label>
                        <span>Default</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_2" name="theme_color" type="radio"
                            value="color-green" />
                        <label for="primary_color_2"></label>
                        <span>Green</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_3" name="theme_color" type="radio"
                            value="color-blue" />
                        <label for="primary_color_3"></label>
                        <span>Blue</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_4" name="theme_color" type="radio"
                            value="color-pink" />
                        <label for="primary_color_4"></label>
                        <span>Pink</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_5" name="theme_color" type="radio"
                            value="color-yellow" />
                        <label for="primary_color_5"></label>
                        <span>Yellow</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_6" name="theme_color" type="radio"
                            value="color-orange" />
                        <label for="primary_color_6"></label>
                        <span>Orange</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_7" name="theme_color" type="radio"
                            value="color-purple" />
                        <label for="primary_color_7"></label>
                        <span>Purple</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_1" name="theme_color" type="radio"
                            value="color-red" />
                        <label for="primary_color_1"></label>
                        <span>Red</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_9" name="theme_color" type="radio"
                            value="color-lightblue" />
                        <label for="primary_color_9"></label>
                        <span>Lightblue</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_10" name="theme_color" type="radio"
                            value="color-teal" />
                        <label for="primary_color_10"></label>
                        <span>Teal</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_11" name="theme_color" type="radio"
                            value="color-lime" />
                        <label for="primary_color_11"></label>
                        <span>Lime</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_12" name="theme_color" type="radio"
                            value="color-deeporange" />
                        <label for="primary_color_12"></label>
                        <span>Deeporange</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Theme Color Settings End -->
        <!-- PWA Offcanvas -->
        <div class="offcanvas offcanvas-bottom pwa-offcanvas">
            <div class="container">
                <div class="offcanvas-body small">
                    <img class="logo" src="{{ asset('images/icon.png') }}" alt="">
                    <h5 class="title">Jobie on Your Home Screen</h5>
                    <p class="pwa-text">Install Jobie job portal mobile app template to your home screen for easy
                        access, just like any other app</p>
                    <button class="btn btn-sm btn-secondary pwa-btn">Add to Home Screen</button>
                    <button class="btn btn-sm pwa-close light btn-danger ms-2">Maybe later</button>
                </div>
            </div>
        </div>
        <div class="offcanvas-backdrop pwa-backdrop"></div>
        <!-- PWA Offcanvas End -->
    </div>
    <!--**********************************
    Scripts
***********************************-->
    <script src="{{ mix('js/app.min.js') }}"></script>
</body>

</html>
