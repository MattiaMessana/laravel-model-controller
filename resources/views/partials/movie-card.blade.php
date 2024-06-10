<ul>
    <li><img class="w-100 rounded" src="{{ $movie->image }}" alt=""></li>
    <div class="p-3">
        <li> <h4> {{ $movie->title }} </h4></li>
        <li>Country: {{ $movie->nationality }}</li>
        <li>Publish: {{ $movie->date }}</li>
        <li>Vote: {{ $movie->vote }}</li>
    </div>
</ul>
