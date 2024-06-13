@extends('layout/master', ['title' => 'Create Employee'])
@section('content')
    <h3>Create new employee</h3>
    <hr>
    <form action="/employees" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter employee name">
        <br><br>
        <textarea name="address" cols="30" rows="10"></textarea>
        <br><br>
        <button type="submit" name="create">Create Employee</button>
    </form>
@endsection
