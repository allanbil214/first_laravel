<h1>Posts</h1>

<a href="/posts/create">Create New</a>

<hr>

@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>

    <a href="/posts/{{ $post->id }}/edit">Edit</a>

    <form action="/posts/{{ $post->id }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <hr>
@endforeach
