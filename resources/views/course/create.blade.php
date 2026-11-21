@extends('components.layouts.app')

@section('title', 'Add Course')

@section('content')

    <x-navbar />

    <h1>Add New Course</h1>

    <x-alert />

    <form action="{{ route('courses.store') }}" method="POST">

        @csrf

        @include('course._form')

        <button type="submit">Save Course</button>

    </form>

    <a href="{{ route('courses.index') }}">Back to Courses</a>

    <x-footer />

@endsection