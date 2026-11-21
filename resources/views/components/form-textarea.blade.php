
@props([
    'label',
    'name',
    'value' => '',
])

<div>
    <label for="{{ $name }}">{{ $label }}:</label><br>

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

<br>
