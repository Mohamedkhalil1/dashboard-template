@props(['title' => null])
<div class="card card-custom gutter-b">
    @if ($title)
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">{{ $title }}</h3>
            </div>
            @isset($toolbar)
                <div class="card-toolbar">
                    {{$toolbar}}
                </div>
            @endisset
        </div>
    @endif
    <div class="card-body">
        <div class="row">
            {{ $slot }}
        </div>
    </div>
    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endisset
</div>
