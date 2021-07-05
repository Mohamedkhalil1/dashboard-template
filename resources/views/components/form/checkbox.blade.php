@props(['title', 'name', 'col'=>'12', 'checked'=>'', 'required'=>false])
@php
    if($checked){
        $checked='checked';
    }
@endphp
<div class="col-md-{{$col}}">
    <div class="form-group">
        <span class="switch switch-icon">
            <label class="col-3 col-form-label">{{$title}}</label>
             @if($required)
                <span class="text-danger">*</span>
            @endif
            <label>
                <input type="checkbox"
                       {{$checked}}
                       name="{{$name}}"
                    {{ $required ? 'required' : '' }}>
                <span></span>
            </label>
        </span>
    </div>
</div>
