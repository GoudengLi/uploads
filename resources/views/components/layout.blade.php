
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Post</title>
    <style>
   body {
    font-family: 'Open Sans', sans-serif;
    background-color: #f0f4f8; 
    color: #333; 
    margin: 0;
    padding: 0;
}

header {
    background-color: #333; 
    color: #fff;
    padding: 10px;
    text-align: center;
}

nav {
    background-color: #718096; 
    color: #fff;
    padding: 10px;
    text-align: center;
    display: flex; 
    justify-content: flex-start; 
    gap: 10px; 
}

nav a {
    text-decoration: none;
    color: #fff;
    padding: 8px 12px; 
    border-radius: 4px; 
    background-color: #4a5568; 
}

section {
    padding: 20px;
}

footer {
    background-color: #718096; 
    color: #fff;
    padding: 10px;
    text-align: center;
}
    </style>
</head>
<body>


    <nav>
        <div style="position: relative">
          
            @auth
                <span>Welcome, {{ auth()->user()->name }}!</span>
                <form method="POST" action="/logout" style="display: inline-block;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: #3490dc; cursor: pointer;">
                        Log Out
                    </button>
                </form>
                @if(auth()->check() && auth()->user()->id == 7)
    <a href="/admin/posts/publish" class="subscribe-btn">Updates Todays' News</a>
    <a href="/admin/posts">edit posted news</a>
                @endif
                
            @else
                <a href="/register">Register</a> 
                <a href="/login" style="margin-left: 10px;">Log In</a>
            @endauth
            <a href="/index" class="subscribe-btn">Posts</a>
        </div>
    </nav>

    <section>
        {{ $slot }}
    </section>

    <footer style="background-color: #4a5568; color: #fff; padding: 20px; text-align: center;">
        <p>&copy; 2024 Wenzhi Zhang. All rights reserved.</p>
    </footer>
    <x-flash />

</body>
</html>