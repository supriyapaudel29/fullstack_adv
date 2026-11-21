@extends('components.layouts.app')

@section('title', 'Edit Course')

@section('content')

    <x-navbar />

    <h1>Edit Course</h1>

    <x-alert />

    <form action="{{ route('courses.update', $course) }}" method="POST">

        @csrf
        @method('PUT')

        @include('course._form')

        <button type="submit">Update Course</button>

    </form>

    <a href="{{ route('courses.index') }}">Back to Courses</a>

    <x-footer />

@endsection