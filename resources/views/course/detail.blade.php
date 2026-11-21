@extends('components.layouts.app')

@section('title', 'Course Details')

@section('content')

    <x-navbar />

    <h1>Course Details</h1>

    <x-alert />

    <p><strong>ID:</strong> {{ $course->id }}</p>
    <p><strong>Name:</strong> {{ $course->name }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Duration:</strong> {{ $course->duration }} days</p>
    <p><strong>Fee:</strong> Rs. {{ $course->fee }}</p>
    <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
    <p><strong>Status:</strong> {{ $course->is_active ? 'Active' : 'Inactive' }}</p>

    <a href="{{ route('courses.edit', $course) }}">Edit Course</a>
    |
    <a href="{{ route('courses.index') }}">Back to Courses</a>

    <x-footer />

@endsection