@extends('layout.master')
@section('title','About')

@section('content')
<div class="container mt-2">
    <div class="">
        <div class="d-flex justify-content-between">
            <span class="fa-stack fa-2x">
                <i class="fa-solid fa-circle fa-stack-2x"></i>
                <i class="fa-solid fa-shield-virus fa-stack-1x fa-inverse"></i>
            </span>
            <span class="fa-stack fa-2x">
                <i class="fa-solid fa-circle fa-stack-2x"></i>
                <i class="fa-solid fa-circle-info fa-stack-1x fa-inverse"></i>
            </span>
            <span class="fa-stack fa-2x">
                <i class="fa-solid fa-circle fa-stack-2x"></i>
                <i class="fa-solid fa-circle-question fa-stack-1x fa-inverse"></i>
            </span>
        </div>
        <div class="d-flex justify-content-between">
            <div class="card mt-2" style="width: 18rem">
                <div class="card-body">
                    <div class="card-title text-center">OUR GOAL</div>
                    <div class="card-text">To Increase and Facilitate Country Side Civilian Healt with Easier Access to
                        Medical Information</div>
                </div>
            </div>
            <div class="card mt-2" style="width: 18rem">
                <div class="card-body">
                    <div class="card-title text-center">ABOUT US</div>
                    <div class="card-text">Passionate Group of Student from State University of Malang Who Wants to
                        Implement Computer Skill into Real World Problem</div>
                </div>
            </div>
            <div class="card mt-2" style="width: 18rem">
                <div class="card-body">
                    <div class="card-title text-center">OUR MOTIVATION</div>
                    <div class="card-text">Motivated by Our Curiosity with Laravel Framework and Meeting the Deadline of
                        Web Development's Deadline</div>
                </div>
            </div>
        </div>
        <div class="d-flex bg-dark mt-5 justify-content-center">
            <div class="p-3 text-light">OUR TEAM</div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card m-2" style="width: 18rem;">
                <img src="{{asset('assets/img/juan.jpg')}}" class="card-img-top img-fluid h-auto w-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Juan Michael</h5>
                    <p class="card-text text-capitalize">19 Year old boy with huge passion at games, basketball and
                        technology. I love chocolate too ^_^ </p>
                    <span>
                        <a href="https://www.instagram.com/juan.michl"
                            class="position-absolute bottom-0 start-0 px-2 py-2">
                            <i class="fa-brands fa-instagram fa-2xl"></i></a>
                    </span>
                </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
                <img src="{{ asset('assets/img/mosen.jpg') }}" class="card-img-top h-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mohsen Samadi</h5>
                    <p class="card-text">Bachelor student of IT 2019 at state University Of Malang.</p>
                    <span>
                        <a href="https://www.instagram.com/james.ms_official"
                            class="position-absolute bottom-0 start-0 px-2 py-2">
                            <i class="fa-brands fa-instagram fa-2xl"></i></a>
                    </span>
                </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
                <img src="{{ asset('assets/img/aurel.jpg') }}" class="card-img-top img-fluid h-50" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Deailsa Vania Aurellia</h5>
                    <p class="card-text text-capitalize"> Born and lives in Malang. Currently Studying in State
                        University of Malang</p>
                    <span>
                        <a href="https://www.instagram.com/ddeailsa"
                            class="position-absolute bottom-0 start-0 px-2 py-2">
                            <i class="fa-brands fa-instagram fa-2xl"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection