@props(['title', 'name', 'type'=>'button', 'class' => 'success' , 'id' => null ])
<button type='{{$type}}' {{ $id ? "id=$id" : '' }} class="btn btn-{{$class}}">{{$title}}</button>
