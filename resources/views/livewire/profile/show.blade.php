<div>
    @if($saved)
        <x-base.notify text="Profile Saved!" close="closeNotification"/>
    @endif
    <x-base.card title="Profile">
        <form wire:submit.prevent="save" class="form form-horizontal">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <x-form.label title="Name"/>
                    </div>

                    <div class="col-md-8 form-group">
                        <x-form.input lazy="true" name="name" type="text" placeholder="Insert Name"/>
                    </div>

                    <div class="col-md-4">
                        <x-form.label title="Email"/>
                    </div>
                    <div class="col-md-8 form-group">
                        <x-form.input lazy="true" name="email" type="email" placeholder="Insert Email"/>
                    </div>

                    <div class="col-md-4">
                        <x-form.label lazy="true" title="Password"/>
                    </div>

                    <div class="col-md-8 form-group">
                        <x-form.input lazy="true" name="password" type="password" placeholder="Password"/>
                    </div>
                    <div class="col-md-4">
                        <x-form.label lazy="true" title="Password Confirmation"/>
                    </div>

                    <div class="col-md-8 form-group">
                        <x-form.input lazy="true" name="passwordConfirmation" type="password"
                                      placeholder="Password Confirmation"/>
                    </div>

                    <div class="col-sm-12 d-flex justify-content-end">
                        <x-base.button type="submit" title="Submit" class="primary me-1 mb-1"/>
                    </div>
                    <div
                        class="col-md-1 float-left align-center text-center tox-collection__item-container--valign-middle">
                    </div>
                </div>
            </div>
        </form>
    </x-base.card>
</div>

