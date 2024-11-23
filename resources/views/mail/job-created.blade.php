<article>

    <h1>{{ $job->title }}</h1>
    <p>Your Job is now successfully posted</p>
    <a href="{{ url('/jobs/' . $job->id) }}">Check you job now.</a>

    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</article>
