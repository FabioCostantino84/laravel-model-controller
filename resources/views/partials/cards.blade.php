{{-- Questa è una direttiva Blade di Laravel che avvia un loop foreach sui dati contenuti nell'array $movies, assegnando ogni elemento a una variabile $movie. --}}
@forelse ($movies as $movie)
    <div class="col">
        <div class="card shadow h-100">
            <div class="card-body">

                {{-- L'URL dell'immagine è generato dinamicamente con un parametro random basato sull'ID del film. --}}
                <img src="https://picsum.photos/400/200?random={{ $movie->id }}" class="card-img-top rounded-2 mb-3"
                    alt="{{ $movie->original_title }}">

                <h4 class="card-title">{{ $movie->title }}</h4>
                <p><strong>Titolo originale: </strong>{{ $movie->original_title }}</p>
                <p><strong>Nazionalità: </strong>{{ $movie->nationality }}</p>
                <p><strong>Data di uscita: </strong>{{ $movie->date }}</p>
                <p><strong>Voto: </strong>{{ $movie->vote }}</p>
            </div>
        </div>
    </div>
    {{-- Questo è un'istruzione Blade che verifica se l'array $movies è vuoto. Se lo è, verrà eseguito il blocco successivo. --}}
@empty

    <div class="col">
        <h2>Spiacenti non ci sono film nel database</h2>
    </div>
@endforelse
