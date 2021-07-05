<div>
    <div class="form-group">
        <input class="form-control" wire:model="name" type="text">
    </div>
    @if($loud)
        <p class="alert alert-info">
            Hello {{ $name }}
        </p>
    @endif
    <div class="form-group">
        <input wire:model="loud" type="checkbox">
    </div>


</div>
