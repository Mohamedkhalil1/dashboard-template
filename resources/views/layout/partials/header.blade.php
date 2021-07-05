<header class="no-print">
    <x-header-menu/>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid py-2">
            <a href="#menu" class="open-nav"><i data-feather="menu"></i></a>
            <a class="navbar-brand" href="{{ route('frontend.home') }}">
                <picture class="lazy">
                    <source data-srcset="{{asset('assets/img/basic/tawridaat.webp')}}" type="image/webp">
                    {{--<source data-srcset="{{asset('assets/img/basic/tawridaat.jpeg')}}" type="image/jpeg">--}} {{-- Does not exist--}}
                    <img alt="" data-src="{{asset('assets/img/basic/tawridaat.png')}}">
                </picture>
            </a>
            @include('frontend.layout.partials.search')
            <div class="cart">
                <a href="{{ route('frontend.client.cart.index') }}" class="btn btn-link iconed">
                    <i data-feather="shopping-cart"></i>
                    <span class="badge badge-primary cart_quantity">{{ $cart_quantity }}</span>
                </a>
            </div>
            <div class="cart">
                <a href="{{ route('frontend.client.favourite.index') }}" class="btn btn-link iconed">
                    <i data-feather="heart"></i>
                    <span class="badge badge-primary">{{ $favourite_count }}</span>
                </a>
            </div>

            <div class="language">
                <a href="{{LaravelLocalization::getLocalizedURL(App::isLocale('en')?'ar':'en')}}"
                   class="btn btn-link iconed">
                    <i data-feather="globe"></i> {{App::isLocale('en') ? 'ع':'EN'}}
                </a>
            </div>
        </div>
    </nav>
</header>
