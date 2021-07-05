@props(['title'=>'', 'name', 'col'=>'12','value' => '' ,'type'=>'text', 'placeholder' => '', 'required' => false])
@if($type === 'hidden')
    <input class="form-control"
           type='{{$type}}'
           name='{{$name}}'
           value='{{$value}}'
    >
@else
    <div class="col-md-{{$col}}">
        <div class="form-group">
            @if($title)
                <label for="{{$name}}">{{ $title }}
                    @if($required)
                        <span class="text-danger">*</span>
                    @endif
                </label>
            @endif
            <input class="form-control"
                   type='{{$type}}'
                   placeholder='{{$placeholder}}'
                   value='{{$value}}'
                   name='{{$name}}'
                   id='{{$name}}'
                {{ $required ? 'required' : '' }}>
        </div>
    </div>
@endif
