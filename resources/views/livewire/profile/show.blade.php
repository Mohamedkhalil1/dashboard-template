<div>
    @section('title',$pageTitle)
    <x-base.card title="{{ $pageTitle }}">
        <x-form.form action="save" :isHorizontal="true">
            <div class="col-md-4">
                <x-form.label title="Birthday"/>
            </div>
            <x-form.form-group col="8">
                <x-form.date-time id="birthday" name="birthday" type="text" placeholder="MM/DD/YYYY"/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label title="Name"/>
            </div>
            <x-form.form-group col="8" hasIcon>
                <x-form.input lazy="true" name="name" type="text" placeholder="Insert Name"
                              rightIcon="bi bi-person"/>
            </x-form.form-group>


            {{--            Communication between js and livewire so easily with event input--}}
            {{--            <div wire:model="count">--}}
            {{--                <div class="col-md-4">--}}
            {{--                    <x-form.label title="Count" :required="false"/>--}}
            {{--                    {{ 'livewire Count:' . $count }}--}}
            {{--                </div>--}}
            {{--                <x-form.form-group col="8">--}}
            {{--                    Count:--}}
            {{--                    <x-base.button type="button" title="0"--}}
            {{--                                   class="default"--}}
            {{--                                   x-data="{ count : 0 } "--}}
            {{--                                   @click="count++;$dispatch('input',count)"--}}
            {{--                                   x-text="count"/>--}}
            {{--                </x-form.form-group>--}}
            {{--            </div>--}}


            <div class="col-md-4">
                <x-form.label title="Email"/>
            </div>
            <x-form.form-group col="8">
                <x-form.input lazy="true" name="email" type="email" placeholder="Insert Email"/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label title="Password" :required="false"></x-form.label>
            </div>
            <x-form.form-group col="8">
                <x-form.input :required="false" lazy="true" name="password" type="password" placeholder="Password"
                              inputGroupText="{{ $password }}"/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label :required="false" title="Password Confirmation"/>
            </div>
            <x-form.form-group col="8">
                <x-form.input :required="false" lazy="true" name="passwordConfirmation" type="password"
                              placeholder="Password Confirmation"/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label :required="false" title="Gender"/>
            </div>
            <x-form.form-group col="8">
                <x-form.select name="gender" :options="$genderTypes" selectTitle="Select Gender" wire:model="gender"
                               wire:ignore/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label :required="false" title="Social Status"/>
            </div>
            <x-form.form-group col="8">
                <x-form.radio-button name="socialStatus" title="Single"/>
                <x-form.radio-button name="socialStatus" title="Married"/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label :required="false" title="Has Job ?"/>
            </div>
            <x-form.form-group col="8">
                <x-form.checkbox name="hasJob" title="Yes ,I have a job"/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label :required="false" title="About you"/>
            </div>
            <x-form.form-group col="8">
                <x-form.textarea name="aboutYou" title="About Me" placeholder="about me"/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label :required="false" title="About you"/>
            </div>
            <x-form.form-group col="8">
                <x-form.rich-text name="richEditor" initalValues="{{ $richEditor }}" wire:model.lazy="richEditor"/>
            </x-form.form-group>

            <div class="col-md-4">
                <x-form.label :required="false" title="User Avatar"/>
            </div>
            <x-form.form-group col="8">
{{--                @if($avatar)--}}
{{--                    <x-base.avatar imageUrl="{{ \App\Models\User::getAvatar($newAvatar) }}"/>--}}
{{--                @endif--}}
{{--                <input type="file" style="display: none;" id="file" wire:model="avatar">--}}
{{--                    <x-form.label for="file" class="tox-cursor-format-painter btn btn-primary" :required="false" title="change" />--}}
                <x-form.upload-photo name="avatar"/>
                <span class="text-danger">
                   @error('avatar') {{ $message }} @enderror
               </span>
            </x-form.form-group>

            <div class="col-sm-12 d-flex justify-content-end">
                <x-base.button type="submit" title="Submit" class="primary me-1 mb-1"/>
            </div>
        </x-form.form>
    </x-base.card>
</div>

