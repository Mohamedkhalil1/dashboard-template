@props(['successUrl','action','method'=>'post','isEdit' => false,'hasFile' => false])
<form class="ajax-form"
      method="{{$method}}"
      success-url="{{$successUrl}}"
      action="{{$action}}"
      enctype="{{$hasFile ? 'multipart/form-data' : ''}}">
    @csrf
    @if($isEdit)
        @method('PATCH')
    @endif
    {{ $slot }}
</form>
