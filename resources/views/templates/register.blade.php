<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>REGISTER</title>
    <!-- Primary Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Register Page v2">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">

    <!-- Third Party Plugin (OverlayScrollbars) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">

    <!-- Third Party Plugin (Bootstrap Icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">

    <!-- Required Plugin (AdminLTE) -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}">
</head>

<body class="register-page bg-body-secondary">
    <div class="register-box">
        <!-- /.register-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header">
                <a href="../index2.html" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h1 class="mb-0"><b>Register</b></h1>
                </a>
            </div>
            <div class="card-body register-card-body">
                <p class="register-box-msg">Register a new membership</p>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerFullName" type="text" class="form-control" name="name" placeholder="Full Name" required>
                            <label for="registerFullName">Full Name</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-person"></span>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerNik" type="text" class="form-control" name="nik" placeholder="nik" required>
                            <label for="registerNik">NIK</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerPassword" type="password" class="form-control" name="password" placeholder="Password" required>
                            <label for="registerPassword">Password</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                    </div>
                  
                    <!-- Begin::Row -->
                    <div class="row">
                        <div class="col-8 d-inline-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- End::Row -->
                </form>
                <p class="mb-0">
                    <a href="login" class="link-primary text-center">I already have a membership</a>
                </p>
            </div> <!-- /.register-card-body -->
        </div>
    </div> <!-- /.register-box -->

    <!-- Third Party Plugin (OverlayScrollbars) -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>

    <!-- Required Plugin (Popper.js for Bootstrap 5) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>

    <!-- Required Plugin (Bootstrap 5) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>

    <!-- Required Plugin (AdminLTE) -->
    <script src="{{ asset('assets/js/adminlte.js') }}"></script>

    <!-- OverlayScrollbars Configure -->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function () {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined") {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
</body>

</html>
