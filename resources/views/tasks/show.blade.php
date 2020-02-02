@extends('layout')

@section('content')

@include('errors')

<div class="container">
    <div class="row">
        <div class="cil-md-12">
        <h3>{{$task->title}}</h3>
            <p>
                {{$task->description}}
            </p>
        </div>
    </div>
</div>
@endsection