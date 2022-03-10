<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SAMA KEYITE') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/backend.css?v=1.0.0')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/remixicon/fonts/remixicon.css')}}">

    <!-- Viewer Plugin -->
      <!--PDF-->
      <link rel="stylesheet" href="{{asset('assets/vendor/doc-viewer/include/pdf/pdf.viewer.css')}}">
      <!--Docs-->
      <!--PPTX-->
      <link rel="stylesheet" href="{{asset('assets/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css')}}">
      <link rel="stylesheet" href="{{asset('assets/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css')}}">
      <!--All Spreadsheet -->
      <link rel="stylesheet" href="{{asset('assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css')}}">
      <!--Image viewer-->
      <link rel="stylesheet" href="{{asset('assets/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css')}}">
      <!--officeToHtml-->
      <link rel="stylesheet" href="{{asset('assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.css')}}">
</head>
<body>
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->

    @yield('content')

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}

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
