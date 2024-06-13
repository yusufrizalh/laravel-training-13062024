@extends('layout/master', ['title' => 'Edit Employee'])
@section('content')
    <h3>Edit employee</h3>
    <hr>
    <form action="/employees/{{ $employee->id }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="name" value="{{ $employee->name }}" placeholder="Enter employee name">
        <br><br>
        <textarea name="address" cols="30" rows="10">{{ $employee->address }}</textarea>
        <br><br>
        <button type="submit" name="update">Update Employee</button>
    </form>
@endsection
