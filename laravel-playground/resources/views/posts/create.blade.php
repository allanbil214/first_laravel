<h1>Create Post</h1>

<form method="POST" action="/posts">
    @csrf

    <div>
        <label>Title</label><br>
        <input type="text" name="title">
    </div>

    <div>
        <label>Content</label><br>
        <textarea name="content"></textarea>
    </div>

    <button type="submit">Save</button>
</form>

<a href="/posts">Back</a>
