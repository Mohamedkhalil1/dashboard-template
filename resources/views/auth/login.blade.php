v<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
    @livewireStyles
</head>
<body>
<div id="auth">
    <div class="row h-100">
        <div class="col-md-7 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="#"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Login</h1>
                <p class="auth-subtitle mb-5">Input your data to register to our website.</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group position-relativ mb-4">
                        <x-form.input :isLivewire="false" name="email" type="email" placeholder="Email"/>
                    </div>
                    <div class="form-group position-relative mb-4">
                        <x-form.input :isLivewire="false" name="password" type="password" placeholder="Password"/>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" name="remember" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">Keep me logged in</label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Login</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Don't have an account?
                        <a href="" class="font-bold">
                            Sign Out
                        </a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5 d-none d-lg-block">
            <div id="auth-right">
            </div>
        </div>
    </div>
</div>
</body>
</html>
