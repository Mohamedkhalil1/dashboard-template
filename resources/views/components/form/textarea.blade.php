@props(['title'=>'','rows'=>6, 'name', 'col'=>'12','value' => '' ,'type'=>'text', 'placeholder' => '', 'required' => false])

<div class="col-md-{{$col}}">
    <div class="form-group">
       <textarea
           class="form-control"
           id='{{$name}}'
           name='{{$name}}'
           placeholder='{{$placeholder}}'
           required='{{$required}}'
           rows='{{$rows}}'>{{$value}}</textarea>
    </div>
</div>

