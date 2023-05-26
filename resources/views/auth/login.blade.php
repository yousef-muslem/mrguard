<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>تسجيل الدخول</title>

    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/simplebarcustom.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-5 p-4 mb-0">
                            <div class="card-body">
                                <h1>تسجيل الدخول</h1>
                                <p class="text-medium-emphasis">Sign In to your account</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group mb-3"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                            </svg></span>
                                        <input class="form-control" type="email" placeholder="إسم المستخدم"
                                            name="email" :value="old('email')" autofocus>
                                        @error('email')
                                            <strong class="mt-2 text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-4"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked">"
                                                </use>
                                            </svg></span>
                                        <input class="form-control" type="password" name="password" required
                                            placeholder="كلمة المرور">
                                        @error('password')
                                            <p class="mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">دخول</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


