@extends('layout/master', ['title' => 'Employee Detail'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <h3 class="text-dark bold">Employee Detail</h3>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white bold">
                        <h4>{{ $employee->name }}</h4>
                    </div>
                    <div class="card-body">
                        <p>Email: {{ $employee->email }}</p>
                        <p>Address: {{ $employee->address }}</p>
                        <p>Department: {{ $employee->department->name }}</p>
                        Skills:
                        @foreach ($skills as $skill)
                            <span class="badge rounded-pill text-bg-primary">
                                <a class="text-white text-decoration-none" href="/skills/{{ $skill->name }}">
                                    {{ $skill->name }}
                                </a>
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
