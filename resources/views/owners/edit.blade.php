@extends('layouts.app')

@section('content')
    <h1>Edit Owner</h1>

    <form action="{{ route('owners.update', $owner) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $owner->name }}" required>

        <label for="surname">Surname:</label>
        <input type="text" name="surname" value="{{ $owner->surname }}" required>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('owners.index') }}">Back to Owners</a>
@endsection
