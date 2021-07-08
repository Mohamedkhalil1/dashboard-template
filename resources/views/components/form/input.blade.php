@props([
    'title'       =>'',
    'name'        => '',
    'value'       => '',
    'type'        =>'text',
    'placeholder' => '',
    'required'    => false ,
    'isLivewire'  => true,
    'lazy'        => false,
    'class'       =>''
])

<input
    class="form-control {{$class}} @error($name) border-danger @enderror"
    type='{{$type}}'
    name='{{$name}}'
    @if($isLivewire)
    {{ $lazy ? "wire:model.lazy=$name" :  "wire:model=$name" }}
    @endif
    placeholder="{{$placeholder}}"
>
<span class="d-inline text-danger">@error($name){{ $message }}@enderror</span>
