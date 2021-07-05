@props(['title'=>'','name','date'=>false,'col'=>'12', 'value'=>'','placeholder'=>'' ,'required'=>false])
<div class="col-md-{{$col}}">
    <div class="form-group">
        @if($title)
            <label for="{{$name}}">{{$title}}</label>
            @if($required)
                <span class="text-danger">*</span>
            @endif
        @endif
        <div class="input-group date" id="{{$name}}" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" name="{{$name}}"
                   placeholder="{{$placeholder}}"
                   value="{{$value}}"
                   data-target="#{{$name}}"
                {{ $required ? 'required' : '' }}
            >
            <div class="input-group-append" data-target="#{{$name}}" data-toggle="datetimepicker">
                    <span class="input-group-text">
                        <i class="ki ki-calendar"></i>
                    </span>
            </div>
        </div>
    </div>
</div>
@once
    @push('script')
        {{--IMPORT JS OF DATETIME--}}
        <script>
            // Class definition

            var KTBootstrapDatetimepicker = function () {
                // Private functions
                var baseDemos = function () {
                    if ('{{$date}}') {
                        $('#{{$name}}').datetimepicker({
                            format: 'L'
                        });
                    } else {
                        $('#{{$name}}').datetimepicker({
                            locale: 'de'
                        });
                    }
                }
                return {
                    // Public functions
                    init: function () {
                        baseDemos();
                        modalDemos();
                        validationDemos();
                    }
                };
            }();

            jQuery(document).ready(function () {
                KTBootstrapDatetimepicker.init();
            });

        </script>
    @endpush
@endonce
