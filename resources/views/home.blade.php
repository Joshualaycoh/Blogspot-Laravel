<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metaverse Posts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        @auth
        <div class="auth-section">
            <p class="success-message">Congrats, you are logged in!</p>
            <form action="/logout" method="POST">
                @csrf
                <button class="logout-button">Log out</button>
            </form>
        </div>

        <div class="post-creation-section">
            <form action="/create-post" method="post" class="post-form">
                @csrf
                <input name="title" type="text" placeholder="Title" class="input-field">
                <textarea name="body" placeholder="Body content..." class="textarea-field"></textarea>
                <button class="save-button">Save Post</button>
            </form>
        </div>

        <div class="all-posts-section">
            <h2>All Posts</h2>
            <div class="posts-grid">
                @foreach ($posts as $post)
                <div class="post-item">
                    <h3>{{ $post['title'] }} by {{ $post->user->name }}</h3>
                    <p>{{ $post['body'] }}</p>
                    <div class="post-actions">
                        <a href="/edit-post/{{ $post->id }}" class="edit-link">Edit</a>
                        <form action="/delete-post/{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="auth-forms">
            <div class="auth-form">
                <h2>Register</h2>
                <form action="/register" method="post" class="form">
                    @csrf
                    <input type="text" placeholder="Name" name="name" class="input-field">
                    <input type="email" placeholder="Email" name="email" class="input-field">
                    <input type="password" placeholder="Password" name="password" class="input-field">
                    <button class="auth-button">Register</button>
                </form>
            </div>
            <div class="auth-form">
                <h2>Login</h2>
                <form action="/login" method="post" class="form">
                    @csrf
                    <input type="text" placeholder="Username" name="loginname" class="input-field">
                    <input type="password" placeholder="Password" name="loginpassword" class="input-field">
                    <button class="auth-button">Login</button>
                </form>
            </div>
        </div>
        @endauth
    </div>
</body>
</html>