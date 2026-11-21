@php
    $course = $course ?? new \App\Models\Course(['is_active' => true]);
@endphp

<x-form-input
    label="Course Name"
    name="name"
    :value="$course->name"
/>

<x-form-textarea
    label="Description"
    name="description"
    :value="$course->description"
/>

<x-form-input
    label="Duration (Days)"
    name="duration"
    type="number"
    :value="$course->duration"
/>

<x-form-input
    label="Fee"
    name="fee"
    type="number"
    :value="$course->fee"
/>

<label>Difficulty:</label>
<br>

<select name="difficulty" required>
    <option value="">Select Difficulty</option>

    @foreach (['Easy', 'Medium', 'Hard'] as $level)
        <option value="{{ $level }}"
            @selected(old('difficulty', $course->difficulty) == $level)>
            {{ $level }}
        </option>
    @endforeach
</select>

<br><br>

<input type="hidden" name="is_active" value="0">

<label>
    <input
        type="checkbox"
        name="is_active"
        value="1"
        @checked(old('is_active', $course->is_active))
    >
    Active
</label>

<br><br>