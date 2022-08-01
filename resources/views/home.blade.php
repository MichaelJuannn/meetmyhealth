@extends('layout.master')
@section('title','WELCOME')

@section('content')
<div class="container">
    <div class="">
        <h1 class="display-1 text-lg-center lh-base font-normal text-none text-decoration-none text-reset">
            Main Feature
        </h1>
    </div>
</div>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column">
            <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x" aria-hidden="true"></i>
                <i class="fa fa-address-card fa-stack-1x fa-inverse" aria-hidden="true"></i>
            </span>
            <a class="btn btn-dark btn-sm" href="complete" role="button">Input Data</a>
        </div>
        <div class="d-flex flex-column mx-5">
            <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x" aria-hidden="true"></i>
                <i class="fa fa-stethoscope fa-stack-1x fa-inverse" aria-hidden="true"></i>
            </span>
            <a class="btn btn-dark btn-sm" href="check" role="button">Check Data</a>
        </div>
        <div class="d-flex flex-column">
            <span class="fa-stack fa-4x">
                <i class="fa fa-square fa-stack-2x" aria-hidden="true"></i>
                <i class="fa fa-calendar-check fa-stack-1x fa-inverse" aria-hidden="true"></i>
            </span>
            <a class="btn btn-dark btn-sm" href="keluh" role="button">Create Appointment</a>
        </div>
    </div>
</div>
@endsection