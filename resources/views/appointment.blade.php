@extends('layout.master')
@section('title','Appointment')
@section('content')
<div class="d-flex">
    @foreach ($client->issue as $issue)
    <div class="card mx-3 my-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$issue->doctor->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$issue->time}}</h6>
            <p class="card-text">{{$issue->issue}}</p>
            <a href="delete/{{$issue->id}}" class="card-link text-danger">Delete</a>
        </div>
    </div>
    @endforeach
</div>
@endsection