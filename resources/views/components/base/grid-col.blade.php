@props(['col' => 6])
<div class="col-md-{{$col}}" {{ $attributes }}>
{{ $slot }}
</div>
