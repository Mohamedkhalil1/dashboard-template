<div class="support-bar py-4 bg-light no-print">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h4 class="custom-font h5 mb-1">@lang('WE WILL BE HAPPY TO HELP YOU')</h4>
                <p class="custom-font lead mb-0">@lang('With any questions you may have!')</p>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <img src="{{ asset('assets/img/basic/phone.png') }}" alt="">
                            <div>
                                <h5 class="custom-font fs-xs mb-0">@lang('Phone Support')</h5>
                                <span class="custom-font fs-sm text-dark" dir="ltr">
                                    {{$contact_phone}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box">
                            <img src="{{ asset('assets/img/basic/mail.png') }}" alt="">
                            <div>
                                <h5 class="custom-font fs-xs mb-0">@lang('Email Support')</h5>
                                    <a class="custom-font fs-sm text-dark" target="_blank" rel="noreferrer"
                                       href="mailto:{{$contact_email}}">
                                        {{$contact_email}}
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="no-print">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
                <picture class="lazy">
                    <source data-srcset="{{ asset('assets/img/basic/tawridaat-white.webp') }}" type="image/webp">
                    <source data-srcset="{{asset('assets/img/basic/tawridaat-white.png')}}" type="image/png">
                    <img alt="" data-src="{{ asset('assets/img/basic/tawridaat-white.png') }}" class="mb-4" width="200">
                </picture>
                <h6>@lang('Follow Us')</h6>
                <ul class="footer-socials mt-4">
                    <li><a href="{{$social_facebook}}" target="_blank"><i data-feather="facebook"></i></a></li>
                    <li><a href="{{$social_twitter}}" target="_blank"><i data-feather="twitter"></i></a></li>
                    <li><a href="{{$social_instagram}}" target="_blank"><i data-feather="instagram"></i></a></li>
                </ul>
            </div>
            <x-footer-menu/>
        </div>
    </div>

    <div class="py-3 footer-bottom">
        <div class="container-fluid">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <small>
                    {{ now()->year }} @lang('TAWRIDAAT ALL RIGHTS RESERVED') |
                    <a href="https://designfy.net/en">@lang('Powered by Designfy')</a>
                </small>
                <p id="back-top">
                    <a href="#page-top">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                             class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                        </svg>
                    </a>
                </p>
            </div>
        </div>
    </div>

</footer>
