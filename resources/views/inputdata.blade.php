@extends('layout.master')
@section('title','Input')

@section('content')
<form action="{{ url('/update-form') }}" method="post">
    @csrf
    <div class="w-25 mx-5 mt-3">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="name" id="nama" readonly class="form-control" value="{{auth()->user()->name}}">
        </div>
        <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="number" name="age" id="usia" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tekanan" class="form-label">Tekanan Darah</label>
            <input type="number" name="blood_pressure" id="tekanan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="diabetes" class="form-label">Apakah Anda Memiliki Riwayat Diabetes</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="diabetes" id="radio1" value="1" class="form-check-input">
            <label for="radio1" class="form-check-label">IYA</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="diabetes" id="radio1" value="0" class="form-check-input">
            <label for="radio1" class="form-check-label">TIDAK</label>
        </div>
        <div class="my-3">
            <button class="btn btn-primary btn-lg " href="#" role="button" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection