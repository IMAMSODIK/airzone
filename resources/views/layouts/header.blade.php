
<div class="page-header">
    <div class="header-wrapper row m-0">
        {{-- <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Riho .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading... </span></div><i class="close-search"
                            data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"> </div>
                </div>
            </div>
        </form> --}}
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"> <a href="index.html"><img class="img-fluid for-light"
                        src="{{ asset('dashboard_assets/assets/images/logo/logo_dark.png') }}" alt="logo-light"><img
                        class="img-fluid for-dark" src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}"
                        alt="logo-dark"></a></div>
            <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div> <a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
                <div class="d-flex align-items-center gap-2 ">
                    <h4 class="f-w-600">Hy There!</h4><img class="mt-0"
                        src="{{ asset('dashboard_assets/assets/images/hand.gif') }}" alt="hand-gif">
                </div>
            </div>
            <div class="welcome-content d-xl-block d-none"><span class="text-truncate col-12"></span></div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
                {{-- <li class="d-md-block d-none">
                    <div class="form search-form mb-0">
                        <div class="input-group"><span class="input-icon">
                                <svg>
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#search-header') }}"></use>
                                </svg>
                                <input class="w-100" type="search" placeholder="Search"></span></div>
                    </div>
                </li> --}}
                {{-- <li class="d-md-none d-block">
                    <div class="form search-form mb-0">
                        <div class="input-group"> <span class="input-show">
                                <svg id="searchIcon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#search-header') }}"></use>
                                </svg>
                                <div id="searchInput">
                                    <input type="search" placeholder="Search">
                                </div>
                            </span></div>
                    </div>
                </li> --}}
                <li>
                    <div class="mode"><i class="moon" data-feather="moon"> </i></div>
                </li>
                {{-- <li>
                    <a href="/"><img class="img-fluid for-light" src="{{ asset('dashboard_assets/assets/images/logo/logo_dark.png') }}" alt="logo-light" width="70px"></a>
                </li> --}}
            </ul>
            {{-- <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div> --}}
        </div>
    </div>
</div>
