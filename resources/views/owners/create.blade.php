@extends('layouts.app')

@section('content')
    <h1>Create Owner</h1>

    <form action="{{ route('owners.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="surname">Surname:</label>
        <input type="text" name="surname" required>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('owners.index') }}">Back to Owners</a>
@endsection
