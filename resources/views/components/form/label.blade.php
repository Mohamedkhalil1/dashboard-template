@props([
    'title'       => '',
    'class'       => '',
    'required'    => true
])

<label {{ $attributes }} class="{{ $class }}">
    {{ $title }}
    @if($required)
        <span class="text-danger">*</span>
    @endif
</label>
