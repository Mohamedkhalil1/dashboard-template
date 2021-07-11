<span {{ $attributes }}>
    <svg class="svg-inline--fa fa-angle-down fa-w-10 fa-fw hide direction-icon select-all" aria-hidden="true" focusable="false"
         data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
         data-fa-i2svg="">
        <path
            fill="currentColor"
            d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
        </path>
    </svg>
</span>
@once
    @push('head')
        <style>
            .direction-icon{
                text-align: center;
                width: 0.5em !important;
            }
        </style>
    @endpush
@endonce
