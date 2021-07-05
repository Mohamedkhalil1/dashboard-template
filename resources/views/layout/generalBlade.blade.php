<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
{{--    <title>{{$title ?? __('')}} {{ ($title ?? null) ?"|":""}} {{ config('app.name') }}</title>--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="{{ config('app.name') }}" name="description"/>
    <meta content="Designfy" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href=" {{asset('assets/vendors/iconly/bold.css')}}">
    <link rel="stylesheet" href=" {{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href=" {{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href=" {{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">
    <!-- END GLOBAL MANDATORY STYLES -->
    @livewireStyles
    <!-- BEGIN PAGE LEVEL PLUGINS -->
@stack('head')
<!-- END PAGE LEVEL PLUGINS -->

</head>
<!-- END HEAD -->
{{--THE BODY--}}
<body>
<div id="app">
    <x-general.sidebar/>
    <div id="main">
{{--        <x-general.header title="Profile Statistics"/>--}}
        @yield('content')
    </div>
</div>
<x-general.footer/>
{{--END BODY--}}

<!-- BEGIN CORE PLUGINS -->
{{--JS--}}
<!-- END THEME LAYOUT SCRIPTS -->
<script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
{{--<script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>--}}
<script src="{{asset('assets/js/main.js')}}"></script>
{{--<script>--}}
{{--    $.ajaxSetup({--}}
{{--        headers: {--}}
{{--            'X-CSRF-TOKEN': '{{csrf_token()}}'--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}
@livewireScripts
@stack('script')
</body>

</html>
