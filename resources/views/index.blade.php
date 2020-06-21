@extends('layouts.bootstrap')

@section('title', 'Home Page')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="container">
                <div class="row text-center mt-3">
                    <div class="col-md-6 text-center">
                        {{$loremipsum}}
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="/img/bijenhouder.jpg" class="rounded img-fluid">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 text-center">
                        <img src="/img/bijenhouder.jpg" class="rounded img-fluid">
                    </div>
                    <div class="col-md-6 text-center">
                        {{$loremipsum}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row text-center">
                    <div class=" col-md-4 p-2">
                        <button type="button" onclick="window.location.href='/activiteiten'"class="btn btn-primary" style="background-color: #ffd73d; border-color: #ffd73d;">Activiteiten</button>
                    </div>
                    <div class="col-md-4 p-2">
                        <button type="button" onclick="window.location.href='/login'" class="btn btn-primary" style="background-color: #ffd73d; border-color: #ffd73d;">Inloggen/Registreren</button>
                    </div>
                    <div class="col-md-4 p-2">
                        <button type="button" onclick="window.location.href='/contact'" class="btn btn-primary" style="background-color: #ffd73d; border-color: #ffd73d;">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row text-center">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                    <img src="/img/honey.jpg" class="rounded img-fluid">
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </main>
@endsection
