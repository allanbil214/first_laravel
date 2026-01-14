<h1>Edit Post</h1>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/posts/{{ $post->id }}">
    @csrf
    @method('PUT')

    <div>
        <label>Title</label><br>
        <input type="text" name="title" value="{{ $post->title }}">
    </div>

    <div>
        <label>Content</label><br>
        <textarea name="content">{{ $post->content }}</textarea>
    </div>

    <button type="submit">Update</button>
</form>

<a href="/posts">Back</a>
