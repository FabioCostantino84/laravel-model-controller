{{-- NON MI FUNZIONANO --}}

@extends('layouts.app')

@section('title', 'Movies')

@section('content')

    <main>
        <div class="container">
            <h1 class="mt-3">MOVIES</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4 my-3">

                @include('partials.cards')

            </div>

        </div>
    </main>
@endsection