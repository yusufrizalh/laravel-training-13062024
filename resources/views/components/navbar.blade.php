<ul class="navbar">
    @foreach ($menu as $link => $route)
        <li><a href="{{ $route }}">{{ $link }}</a></li>
    @endforeach
</ul>
