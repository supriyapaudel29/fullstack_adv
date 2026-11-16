
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    <a href="{{ route('students.index') }}">Back to Students</a>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>Name:</p>
        <input type="text" name="name" value="{{ old('name', $student->name) }}" required>

        <p>Email:</p>
        <input type="email" name="email" value="{{ old('email', $student->email) }}" required>

        <p>Phone:</p>
        <input type="text" name="phone" value="{{ old('phone', $student->phone) }}" required>

        <p>Address:</p>
        <input type="text" name="address" value="{{ old('address', $student->address) }}">

        <p>Date of Birth:</p>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth) }}">

        <br><br>
        <button type="submit">Update Student</button>
    </form>

</body>
</html>
