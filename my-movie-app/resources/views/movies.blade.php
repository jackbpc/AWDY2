<h1>Movie List</h1>

@foreach($movies as $movie)
    <div>
        <img src="{{ asset($movie->image) }}" alt="{{ $movie->title }}" style="width:200px;">
        <h3>{{ $movie->title }}</h3>
        <p>{{ $movie->description }}</p>
        <p>Genre: {{ $movie->genre }}</p>
        <p>Rating: {{ $movie->rating }}/5</p>
    </div>
@endforeach
