@props([
'title'=>'', 'name','selectTitle'=>'',
'class'=>'select2' ,'col'=>'12',
'options', 'value' => '', 'required' => false
])
@php
    $value ??= request($name,0);
@endphp
<div class="col-md-{{$col}}">
    <div class="form-group">
        @if($title)
            <label for="{{$name}}">{{ $title }}</label>
            @if($required)
                <span class="text-danger">*</span>
            @endif
        @endif
        <div></div>
        <select class="form-control {{$class}}" id="{{$name}}" name='{{$name}}'
                {{ $required ? 'required' : '' }} selected-id="{{$value}}">
            <option selected="selected" value='0'>{{ $selectTitle }}</option>
            @foreach($options as $option)
                <option
                    value="{{$option->id ?? $option['id']}}" {{ ($option->id ?? $option['id']) == $value ? 'selected' : '' }}>
                    {{$option->name ?? $option['name']}}
                </option>
            @endforeach
        </select>
    </div>
</div>
@once
    @push('script')
        <script>
            $('.select2').select2({
                dir              : '{{ App::isLocale('ar') ?'rtl' : 'ltr'}}',
                dropdownAutoWidth: true
            })
        </script>
    @endpush
@endonce
