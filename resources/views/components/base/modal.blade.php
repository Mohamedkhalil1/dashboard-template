@props(['id','title'])
<!--Modal-->
<div class="modal fade" data-backdrop="static" id="{{$id}}" tabindex="-1" role="dialog"
     aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="excelLabel">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            @isset($modalBody)
                <div class="modal-body row">
                    {{ $modalBody }}
                </div>
            @endisset
            @isset($modalFooter)
                <div class="modal-footer">
                    {{ $modalFooter }}
                </div>
            @endisset
        </div>
    </div>
</div>
<!--End Modal-->
