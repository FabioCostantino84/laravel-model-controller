
{{-- Questa istruzione @extends il layout che si trova dentro "layouts/app.blade.php". --}}
@extends('layouts.app')

{{-- Le @section vengono utilizzate per inserire contenuti dinamici. --}}
@section('title', 'Movies')

{{-- Questo @section mi fa inserire il contenuto  di questa pagina all'interno del layout. --}}
@section('content')

    <main>
        <div class="container">
            <h1 class="mt-3">MOVIES</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4 my-3">

                {{-- @include permette di inserire il contenuto di un file all'interno di questa pagina. --}}
                @include('partials.cards')

            </div>

        </div>
    </main>
@endsection