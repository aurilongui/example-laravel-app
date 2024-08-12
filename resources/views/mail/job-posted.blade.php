<h2>
    {{ $job->title }}
</h2>

<p>
    Enhorabuena! Tu trabajo está ahora posteado en la web.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">Visualiza tu lista de trabajos</a>
</p>
