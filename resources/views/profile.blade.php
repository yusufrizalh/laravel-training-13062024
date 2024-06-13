@extends('/layout/master', ['title' => 'Profile Page'])
@section('style')
    <style>
        body {
            background-color: #aaaaaa;
        }
    </style>
@endsection
@section('content')
    <p>This is profile page.</p>
    <p>My name is {{ $username }}</p>
@endsection
