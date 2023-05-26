<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI for Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.rtl.min.css"
        integrity="sha384-7W1eMOzj3wRp1Oat/SJe+uPZ3lBB5YWlrjI9zeLbto2KkseMeJKSGAs4844qZPjz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/simplebarcustom.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;500;600&display=swap"
        rel="stylesheet">
    <title> @yield('title')</title>
</head>

<body>
    <div class="sidebar sidebar-light sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            مستر جارد
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">الرئيسية</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="colors.html">كاميرات المراقبة</a>
            </li> --}}
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">إدارة الأقسام</a>
                <ul class="nav-group-items">
                    <li class="nav-item">
                        <a class="nav-link" href="base/accordion.html">كاميرات مراقبة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base/accordion.html">كاميرات مراقبة</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Mobile Sidebar -->
    <div class="sidebar sidebar-light sidebar-lg sidebar-end sidebar-overlaid hide" id="aside">
        <div class="sidebar-header bg-transparent p-0">
            <ul class="nav nav-underline nav-underline-primary" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#timeline"
                        role="tab">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#messages" role="tab">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#settings" role="tab">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                        </svg></a></li>
            </ul>
            <button class="sidebar-close" type="button" data-coreui-close="sidebar">
                <!-- Menu Icon -->
            </button>
        </div>
        <!-- Tab panes-->

    </div>

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link btn btn-success btn-lg text-white " target="_blank"
                            href="/">موقع العملاء</a></li>
                </ul>
                <nav class="header-nav ms-auto me-4">

                </nav>
                <ul class="header-nav me-3">
                </ul>
                <ul class="header-nav me-4">
                    <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0"
                            data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img"
                                    src="{{ asset('admin/img/avatar/2.jpg') }}" alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('dashboard.setting.index') }}">إعدادت الحساب</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                        تسجيل الخروج
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
                    </svg>
                </button>
            </div>
        </header>
        <div class="body flex-grow-1 px-2">
            <div class="container-lg">
                <!-- /.row-->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- /.card.mb-4-->
                <!-- /.row-->
            </div>
        </div>
        <footer class="footer d-flex justify-content-center ">
            <div>جميع الحقوق محفوظة Mr.Guard</div>
        </footer>
    </div>
    <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js"
        integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/assets/js/simplesidebar.bundle.min.js') }}"></script>
    <!-- Option 2: Separate Popper and CoreUI for Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity=" sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.min.js"
        integrity="sha384-2hww80ziDjQXYpFulPf5tfdCCXLTxn70HdSwL9MfeEvpS0kjfHd1iaBRsLpnuaSC" crossorigin="anonymous">
    </script> -->

    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
</body>

</html>
