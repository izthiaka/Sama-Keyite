<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SAMA KEYITE') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/sama_keyite.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/backend-plugin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/backend.css?v=1.0.0') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}" />

    <!-- Viewer Plugin -->
    <!--PDF-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/pdf/pdf.viewer.css') }}" />
    <!--Docs-->
    <!--PPTX-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css') }}" />
    <!--All Spreadsheet -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css') }}" />
    <!--Image viewer-->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css') }}" />
    <!--officeToHtml-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.css') }}" />

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center"></div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
        <div class="iq-sidebar sidebar-default">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="index.html" class="header-logo">
                    <img src="{{asset('assets/images/logo_sk.png')}}" class="img-fluid rounded-normal light-logo" alt="logo" />
                </a>
                <div class="iq-menu-bt-sidebar">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="{{route('dashboard.client')}}" class="">
                                <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li>
                            <a href="#" class="">
                                <i class="las la-list-alt"></i><span>Traitement Demande</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="index.html" class="header-logo">
                            <img src="{{asset('assets/images/logo_sk.png')}}" class="img-fluid rounded-normal light-logo"
                                alt="logo" />
                            <img src="{{asset('assets/images/logo_sk_blanc.png')}}" class="img-fluid rounded-normal darkmode-logo"
                                alt="logo" />
                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                    </div>

                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                        aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12"
                                                    placeholder="type here to search..." />
                                                <a href="#" class="search-link"><i class="las la-search"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton01"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-question-line"></i>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton01">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0">
                                                <div class="p-3">
                                                    <a href="#" class="iq-sub-card pt-0"><i
                                                            class="ri-questionnaire-line"></i>Help</a>
                                                    <a href="#" class="iq-sub-card"><i
                                                            class="ri-recycle-line"></i>Training</a>
                                                    <a href="#" class="iq-sub-card"><i
                                                            class="ri-refresh-line"></i>Updates</a>
                                                    <a href="#" class="iq-sub-card"><i
                                                            class="ri-service-line"></i>Terms and
                                                        Policy</a>
                                                    <a href="#" class="iq-sub-card"><i
                                                            class="ri-feedback-line"></i>Send Feedback</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton02"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-settings-3-line"></i>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton02">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0">
                                                <div class="p-3">
                                                    <a href="#" class="iq-sub-card pt-0"><i
                                                            class="ri-settings-3-line"></i> Settings</a>
                                                    <a href="#" class="iq-sub-card"><i
                                                            class="ri-hard-drive-line"></i> Get Drive for
                                                        desktop</a>
                                                    <a href="#" class="iq-sub-card"><i
                                                            class="ri-keyboard-line"></i> Keyboard
                                                        Shortcuts</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown caption-content">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton03"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="caption bg-primary line-height">P</div>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton03">
                                        <div class="card mb-0">
                                            <div
                                                class="card-header d-flex justify-content-between align-items-center mb-0">
                                                <div class="header-title">
                                                    <h4 class="card-title mb-0">Profile</h4>
                                                </div>
                                                <div class="close-data text-right badge badge-primary cursor-pointer">
                                                    <i class="ri-close-fill"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="profile-header">
                                                    <div class="cover-container text-center">
                                                        <div
                                                            class="rounded-circle profile-icon bg-primary mx-auto d-block">
                                                            P
                                                            <a href=""> </a>
                                                        </div>
                                                        <div class="profile-detail mt-3">
                                                            <h5>
                                                                <a href="../app/user-profile-edit.html">{{Auth::user()->prenom}} {{Auth::user()->nom}}</a>
                                                            </h5>
                                                            <p>{{Auth::user()->email}}</p>
                                                        </div>
                                                        <a href="auth-sign-in.html" class="btn btn-primary"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"> Déconnexion</a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content-page">
            @yield('content')
        </div>
    </div>
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="../backend/privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="../backend/terms-of-service.html">Terms of Use</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        ©
                    </span>
                    <a href="#" class="">CloudBOX</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('assets/js/backend-bundle.min.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{asset('assets/js/customizer.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{asset('assets/js/chart-custom.js')}}"></script>

    <!--PDF-->
    <script src="{{asset('assets/vendor/doc-viewer/include/pdf/pdf.js')}}"></script>
    <!--Docs-->
    <script src="{{asset('assets/vendor/doc-viewer/include/docx/jszip-utils.js')}}"></script>
    <script src="{{asset('assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js')}}"></script>
    <!--PPTX-->
    <script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js')}}"></script>
    <script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js')}}"></script>
    <script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js')}}"></script>
    <script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js')}}"></script>
    <script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js')}}"></script>
    <!--All Spreadsheet -->
    <script src="{{asset('assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js')}}"></script>
    <script src="{{asset('assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js')}}"></script>
    <!--Image viewer-->
    <script src="{{asset('assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js')}}"></script>
    <!--officeToHtml-->
    <script src="{{asset('assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js')}}"></script>
    <script src="{{asset('assets/js/doc-viewer.js')}}"></script>
    <!-- app JavaScript -->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>
