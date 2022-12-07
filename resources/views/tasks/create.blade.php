@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ToDo Create</div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                @foreach ($errors->get('title') as $message)
                                    <div style="color:red;">
                                        {{ $message }}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                         
                        <button class="btn btn-primary" type="submit">save</button>
                        <a href="{{ route('tasks.index') }}">
                            <button class="btn btn-outline-secondary" type="button">back</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
