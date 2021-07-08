@props(['text' => '' , 'close' => ''])
<div class="toastify on  toastify-right toastify-top"
     style="background: rgb(79, 190, 135);
     transform: translate(0px, 0px);
     top: 15px;">
    {{ $text }}
    <span wire:click="{{$close}}" class="toast-close">✖</span>
</div>
{{--@push('script')--}}
{{--    <script>--}}
{{--        Toastify({--}}
{{--            text: "This is toast in top right",--}}
{{--            duration: 3000,--}}
{{--            close:true,--}}
{{--            gravity:"top",--}}
{{--            position: "right",--}}
{{--            backgroundColor: "#4fbe87",--}}
{{--        }).showToast();--}}
{{--    </script>--}}
{{--@endpush--}}
