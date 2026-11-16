<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add New Student</h1>

    <a href="{{ route('students.index') }}">Back to Students</a>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <p>Name:</p>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <p>Email:</p>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <p>Phone:</p>
        <input type="text" name="phone" value="{{ old('phone') }}" required>

        <p>Address:</p>
        <input type="text" name="address" value="{{ old('address') }}">

        <p>Date of Birth:</p>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">

        <br><br>
        <button type="submit">Save Student</button>
    </form>

</body>
</html>