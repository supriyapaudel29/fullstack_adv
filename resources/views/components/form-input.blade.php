
@props([
    'label',
    'name',
    'type' => 'text',
    'value' => '',
])

<div>
    <label for="{{ $name }}">{{ $label }}:</label><br>

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
    >

    @error($name)
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

<br>
