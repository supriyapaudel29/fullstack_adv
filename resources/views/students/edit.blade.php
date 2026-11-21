
@extends('components.layouts.app')

@section('title', 'Edit Student')

@section('content')

    <x-navbar />

    <h1>Edit Student</h1>

    <x-alert />

    <form action="{{ route('students.update', $student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <x-students.form :student="$student" />

        <button type="submit">Update Student</button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">Back to Students List</a>

    <x-footer />

@endsection
