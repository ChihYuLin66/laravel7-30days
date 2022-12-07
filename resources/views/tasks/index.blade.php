@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ToDo List</div>
                <div class="card-body">

                    @if (session('flash-alert-success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('flash-alert-success') }}
                        </div>
                    @elseif (session('flash-alert-error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('flash-alert-error') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12 mb-1">
                            <a href="{{ route('tasks.create') }}">
                                <button class="btn btn-primary">create</button>
                            </a>
                        </div>
                        
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">任務</th>
                                        <th scope="col">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($tasks->isNotEmpty())
                                        @foreach ($tasks as $task)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $task->title }}</td>
                                                <td>
                                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')

                                                        <a href="{{ route('tasks.edit', $task->id) }}">
                                                            <button class="btn btn-outline-dark" type="button">edit</button>
                                                        </a>
                                                        
                                                        <a href="javascript:;">
                                                            <button class="btn btn-outline-danger" type="submit">delete</button>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" class="text-center">No Data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            {{ $tasks->links() }}
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
