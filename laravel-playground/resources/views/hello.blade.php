<h1>Hello Blade</h1>
<p>This is a Laravel view.</p>

<h1>Posts</h1>

@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
@endforeach