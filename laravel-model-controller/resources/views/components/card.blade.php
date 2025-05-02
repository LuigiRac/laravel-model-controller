@props(['movie'])

    <div class="card">
        <div class="card-header">
            <h2>{{ $movie['title'] }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Titolo Originale:</strong>{{ $movie['original_title'] }}</p>
            <p><strong>Nazionalità:</strong> {{ $movie['nationality'] }}</p>
            <p><strong>Data di uscita:</strong> {{ $movie['date'] }}</p>
        </div>
        <div class="card-footer">
            <div id="vote-circles">
                @for ($i = 0; $i < floor($movie['vote']); $i++)
                    <span class="vote-circle green"></span>
                @endfor
                @for ($i = 0; $i < 10 - floor($movie['vote']); $i++)
                    <span class="vote-circle empty"></span>
                @endfor
            </div>
            <p class="vote-number">Voto: ({{ $movie['vote'] }})</p>
        </div>
    </div>
