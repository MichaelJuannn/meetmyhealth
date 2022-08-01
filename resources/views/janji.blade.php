@extends('layout.master')
@section('title','Reserve')
@section('content')
<div class="container mt-3">
    <form action="keluh/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea class="form-control" placeholder="Tuliskan keluhan secara detail" id="keluhan"
                name="issue"></textarea>
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu Janji</label>
            <input type="date" name="time" id="waktu" class="form-control">
        </div>
        <div class="mb-3">
            <label for="doctor" class="form-label">Pilih Dokter</label>
            <select name="doctor" id="doctor" class="form-select">
                <option selected value="">Klik Disini</option>
                @foreach ($doctors as $doctor)
                <option value="{{$doctor->id}}">dr.{{$doctor->name}}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="Information" class="form-label">Client</label>
                <input type="text" name="client_id" id="information" readonly class="form-control"
                    value="{{auth()->user()->id}}">
            </div>
            <div class="my-3">
                <button class="btn btn-primary btn-lg " href="" role="button" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection