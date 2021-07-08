@props([
    'action'  => '',
    'method'  => 'post',
    'isEdit'  => false,
    'hasFile' => false
    ])
<form class="form form-horizontal">
    @csrf
    <div class="form-body">
        <div class="row">
            @if($isEdit)
                @method('PATCH')
            @endif
            {{ $slot }}
        </div>
    </div>

</form>
