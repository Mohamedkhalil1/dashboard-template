<script src="{{asset('assets/js/all.min.js')}}?123"></script>
<script src="{{asset('assets/js/shop.min.js')}}?123"></script>
<script src="{{asset('assets/js/control.min.js')}}?123"></script>

<script src="{{asset('assets/js/all.script.js')}}?123"></script>
<script src="{{asset('assets/js/shop.script.js')}}?123"></script>
<script src="{{asset('assets/js/control.script.js')}}?123"></script>

<script src="{{ asset('dashboard-assets/js/'.App::getLocale().'.js') }}"></script>
<script src="{{asset('dashboard-assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dashboard-assets/js/ajax-form.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });
</script>
@stack("script")
