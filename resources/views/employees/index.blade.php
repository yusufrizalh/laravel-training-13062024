@extends('layout/master', ['title' => 'Employees Page'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between">
                @if (isset($department))
                    <h3 class="text-dark bold">Department: {{ $department->name }}</h3>
                @elseif (isset($skill))
                    <h3 class="text-dark bold">Skill: {{ $skill->name }}</h3>
                @else
                    <h3 class="text-dark bold">All Employees</h3>
                @endif
                <a class="btn btn-primary btn-md" href="/employees/create">Create Employee</a>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>DEPARTMENT</th>
                                    <th>OPTIONS</th>
                                </tr>
                            </thead>
                            @foreach ($employees as $employee)
                                <tbody>
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>
                                            <a href="/employees/{{ $employee->id }}"
                                                class="text-primary text-decoration-none">
                                                {{ $employee->name }}
                                            </a>
                                        </td>
                                        <td>{{ $employee->email }}</td>
                                        <td>
                                            <a class="text-primary text-decoration-none"
                                                href="/departments/{{ $employee->department->name }}">
                                                {{ $employee->department->name }}
                                            </a>
                                        </td>
                                        <td colspan="2">
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-sm btn-outline-warning"
                                                    href="/employees/{{ $employee->id }}/edit">Edit</a>
                                                &nbsp;&nbsp;
                                                <form action="/employees/{{ $employee->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-outline-danger" type="submit"
                                                        name="delete">delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="pt-5 d-flex justify-content-center">
                {{ $employees->links() }}
            </div>
        </div>
    </div>
@endsection
