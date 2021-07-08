<div>
    <div class="form-group">
        <input class="form-control" wire:model.lazy="name" type="text">
    </div>
    <div class="form-group">
        <select wire:model="greeting" multiple>
            <option>Hello</option>
            <option>GoodBye</option>
        </select>
    </div>
    @if($loud)
        <p class="alert alert-info">
            {{ implode(', ',$greeting)  }} {{ $name }}
        </p>
    @endif
    <div class="form-group">
        <input wire:model="loud" type="checkbox">
    </div>

    <form action="0" wire:submit.prevent="$set('name','Eitsh')">
        <button class="btn btn-primary">
            submit
        </button>
    </form>

</div>




