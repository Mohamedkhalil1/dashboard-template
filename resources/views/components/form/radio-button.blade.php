@props([
    'title',
    'name',
    'class' => ''
])

<div class="form-check">
    <input
        wire:model="{{ $name }}"
        class="form-check-input {{ $class }}"
        type="radio"
        id="{{ $title }}"
        value="{{ $title }}">

    <label class="form-check-label" for="{{ $title }}">
        {{ $title }}
    </label>
</div>
