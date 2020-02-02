@extends('layout')

@section('content')
<div class="container">
    <h3>My tasks</h3>
    <a href="{{ route('tasks.create')}}" class="btn btn-success">Create</a>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        <td>
                            <a href="{{ route('tasks.show', $task->id)}}">
                                <div class="glyphicon glyphicon-eye-open">1</div>
                            </a>
                            <div class="glyphicon glyphicon-edit" style="display:block">
                                <a href="{{ route('tasks.edit', $task->id)}}">2</a>
                            </div>
                            {!! Form::open(['method' => 'DELETE',
                                'route' => ['tasks.destroy', $task->id]]) !!}
                                <button onclick="return confirm('Are you sure?')">
                                    <div class="glyphicon glyphicon-remove">3</div>
                                </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection