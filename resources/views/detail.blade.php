@extends('layout.master')
@section('title', 'Details')
@section('content')
<div class="container">
    <h2>Identity</h2>
</div>
<div class="container my-1">
    <div class="row mb-2">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$client->email}}">
        </div>
    </div>
    <div class="row mb-2">
        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$client->name}}">
        </div>
    </div>
    <div class="row mb-2">
        <label for="staticEmail" class="col-sm-2 col-form-label">Age</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$client->age}}">
        </div>
    </div>
    <div class="row mb-2">
        <label for="staticEmail" class="col-sm-2 col-form-label">Blood Pressure</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                value="{{$client->blood_pressure}}">
        </div>
    </div>
    <div class="row mb-2">
        <label for="staticEmail" class="col-sm-2 col-form-label">Diabetes</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                value="@if ($client->diabetes === 1){{'yes'}}@else{{'no'}}@endif">
        </div>
    </div>
    {{-- <div class="row mb-2">
        <label for="staticEmail" class="col-sm-2 col-form-label">Dokter</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="@if(isset($client->doctor->name)){{'dr.'.$client->doctor->name}}
                @else{{'Anda belum memilih dokter'}}@endif">
        </div>
    </div> --}}
</div>
@endsection