@php
    $mode = $mode ?? 'edit';
    $readonly = $mode == 'show';
@endphp

<div class="flex flex-wrap space-x-8">
    <div class="grow mt-6 space-y-4">
        <x-field.input name="name" label="Name" :readonly="$readonly"
                        value="{{ old('name', $administrative->name) }}"/>
        <x-field.input name="email" type="email" label="Email" :readonly="$readonly"
                        value="{{ old('email', $administrative->email) }}"/>
        <x-field.radiogroup name="gender" label="Gender" :readonly="$readonly"
            value="{{ old('gender', $administrative->gender) }}"
            :options="['M' => 'Masculine', 'F' => 'Feminine']"/>
        <x-field.checkbox name="admin" label="Administrator" :readonly="$readonly"
                        value="{{ old('admin', $administrative->admin) }}"/>
    </div>
    <div class="pb-6">
        <x-field.image
            name="photo_file"
            label="Photo"
            width="md"
            readonly
            deleteTitle="Delete Photo"
            :deleteAllow="true"
            :imageUrl="$administrative->photoFullUrl"/>
    </div>
</div>
