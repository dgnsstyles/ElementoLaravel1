<a href="{{ url('/post'.$post->id.'/'.trim(str_replace('', '-', $post->title))) }}">
    <h2>{{ $post->title }}</h2>
    <h3>{{ $post->excerpt }}</h3>
</a>