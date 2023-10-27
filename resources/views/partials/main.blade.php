
    <div class="container">

        <div class="row">
            <div class="col-3">
                @forelse ($movies as $movie)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <p class="card-text">{{$movie->date}}</p>
                        <p class="card-text">{{$movie->vote}}</p>
                    </div>
                </div>
                @empty
        
                @endforelse

            </div>
        </div>
        
    </div>