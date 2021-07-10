@props(['title'=>'' , 'height'=>150 , 'name' , 'placeholder' => '', 'required' => false])
@php
    $required = $required ? 'required' : '';
@endphp
<div class="form-floating">
<textarea class="form-control"
          wire:model="{{ $name }}"
          style="height:{{ $height }}px"
          {{ $required }}
          placeholder="{{ $placeholder }}"></textarea>
    <label>{{ $title }}</label>
</div>
