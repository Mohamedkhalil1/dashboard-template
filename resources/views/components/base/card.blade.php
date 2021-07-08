@props(['title' => null , 'footer' => null ])
<div class="card">
    @if ($title)
        <div class="card-header">
            <div class="card-title">
                <h4 class="card-title">{{ $title }}</h4>
            </div>
        </div>
    @endif
    <div class="card-content">
        <div class="card-body">
            <div class="row">
                {{ $slot }}
            </div>
        </div>
    </div>

    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endisset
</div>
