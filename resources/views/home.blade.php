<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    <p>Congrats you are login!</p>
    <form action="/logout" method="POST">
    @csrf
    <button>Log out</button>
    </form>
    <div style="border:3px solid black">
        <form action="/create-post" method="post" style="display:flex;flex-direction:column;gap:5px">
            @csrf
            <input name="title" type="text" placeholder="Title">
            <textarea name="body" placeholder="body content..."></textarea>
            <button>Save Post</button>
        </form>
    </div>
    <div style="border: 3px solid black; padding: 20px;">
        <h2>All Post</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-bottom: 20px;">
            @foreach ($posts as $post)
                <div style="background: gray; padding: 15px;">
                    <h3>{{ $post['title'] }} by {{$post->user->name}}</h3> 
                    <p>{{ $post['body'] }}</p>
                    <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                    <form action="/delete-post/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    @else
    <div style="border:3px solid black">
        <h1>Register</h1>
        <form action="/register" method="post">
            @csrf
             <input type="text" placeholder="name" name="name">
             <input type="email" placeholder="email" name="email">
             <input type="password" placeholder="password" name="password">
             <button>Register</button>
        </form>
    </div>
    <div style="border:3px solid black">
        <h1>Login</h1>
        <form action="/login" method="post">
            @csrf
             <input type="text" placeholder="name" name="loginname">
             <input type="password" placeholder="password" name="loginpassword">
             <button>Login</button>
        </form>
    </div>
    @endauth


</body>
</html>