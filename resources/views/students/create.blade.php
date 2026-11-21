
@extends('components.layouts.app')

@section('title', 'Add Student')

@section('content')

    <x-navbar />

    <h1>Add New Student</h1>

    <x-alert />

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <x-students.form />

        <button type="submit">Save Student</button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">Back to Students List</a>

    <x-footer />

@endsection
