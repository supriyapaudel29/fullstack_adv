
@props(['student' => null])

<x-form-input
    label="Name"
    name="name"
    :value="$student?->name"
/>

<x-form-input
    label="Email"
    name="email"
    type="email"
    :value="$student?->email"
/>

<x-form-input
    label="Phone"
    name="phone"
    :value="$student?->phone"
/>

<x-form-textarea
    label="Address"
    name="address"
    :value="$student?->address"
/>

<x-form-input
    label="Date of Birth"
    name="date_of_birth"
    type="date"
    :value="$student?->date_of_birth?->format('Y-m-d')"
/>
