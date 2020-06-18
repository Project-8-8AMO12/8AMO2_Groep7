@extends('layouts.bootstrap')

@section('title', 'Home Page')

@section('content')
    <main>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    1 of 2
                </div>
                <div class="col">
                    2 of 2
                    {{ $loremipsum }}
                </div>
            </div>
        </div>
    </main>
@endsection
