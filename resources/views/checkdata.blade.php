@extends('layout.master')
@section('title','Data Check')
@section('content')

<div class="container mt-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Age</th>
                <th scope="col">Blood Pressure</th>
                <th scope="col">Diabetes History</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row"><a href="{{url('/check/'.$client->id)}}">{{$client->id}}</a></th>
                <td>{{$client->email}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->birthday}}</td>
                <td>{{$client->age}}</td>
                <td>{{$client->blood_pressure}}</td>
                <td>
                    @if ($client->diabetes === 1)
                    {{'yes'}}
                    @else
                    {{'no'}}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection