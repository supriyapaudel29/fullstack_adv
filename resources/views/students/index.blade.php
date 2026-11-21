@extends('components.layouts.app')

@section('title', 'Students List')

@section('content')

    <x-navbar />

    <h1>Students List</h1>

    <x-alert />

    <a href="{{ route('students.create') }}">Add New Student</a>

    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->date_of_birth?->format('Y-m-d') }}</td>
                    <td>{{ $student->age }}</td>

                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">
                            Edit
                        </a>

                        <x-delete-form :action="route('students.destroy', $student->id)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-footer />

@endsection
