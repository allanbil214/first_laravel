<h1>Posts (API Driven)</h1>

<form id="postForm">
    <input type="text" id="title" placeholder="Title"><br><br>
    <textarea id="content" placeholder="Content"></textarea><br><br>
    <button type="submit">Create</button>
</form>

<hr>

<div id="posts"></div>

<script>
const apiUrl = '/api/posts';

function loadPosts() {
    fetch(apiUrl)
        .then(r => r.json())
        .then(data => {
            const container = document.getElementById('posts');
            container.innerHTML = '';

            data.forEach(post => {
                container.innerHTML += `
                    <h3>${post.title}</h3>
                    <p>${post.content}</p>
                    <button onclick="deletePost(${post.id})">Delete</button>
                    <hr>
                `;
            });
        });
}

function deletePost(id) {
    fetch(`${apiUrl}/${id}`, {
        method: 'DELETE'
    }).then(loadPosts);
}

document.getElementById('postForm').addEventListener('submit', e => {
    e.preventDefault();

    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            title: title.value,
            content: content.value
        })
    }).then(() => {
        title.value = '';
        content.value = '';
        loadPosts();
    });
});

loadPosts();
</script>
