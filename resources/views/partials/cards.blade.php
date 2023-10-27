

@forelse ($movies as $movie)
    <div class="col">
        <div class="card shadow h-100">
            <div class="card-body">

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

@empty

    <div class="col">
        <h2>Spiacenti non ci sono film nel database</h2>
    </div>
@endforelse
