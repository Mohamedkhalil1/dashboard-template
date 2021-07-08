<div id="auth">
    <div class="row h-100">
        <div class="col-md-7 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="#"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Sign Up</h1>
                <p class="auth-subtitle mb-5">Input your data to register to our website.</p>
                <form wire:submit.prevent="register">
                    <div class="form-group position-relativ mb-4">
                        <x-form.input name="email" type="email" placeholder="Email"  />
                    </div>
                    <div class="form-group position-relative mb-4">
                        <x-form.input name="name" type="text" placeholder="Name" />
                    </div>
                    <div class="form-group position-relative mb-4">
                        <x-form.input lazy="true" name="password" type="password" placeholder="Password"  />
                    </div>
                    <div class="form-group position-relative mb-4">
                        <x-form.input lazy="true" name="passwordConfirmation" type="password" placeholder="Confirm Password"  />
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Already have an account?
                        <a href="" class="font-bold">
                            Log in
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
