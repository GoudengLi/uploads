
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
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #000;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 10px;
        }

        section {
            padding: 20px;
        }

        footer {
            background-color: #000;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>


    <nav>
        <div>
            @auth
                <span>Welcome, {{ auth()->user()->name }}!</span>
                <form method="POST" action="/logout" style="display: inline-block;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: #3490dc; cursor: pointer;">
                        Log Out
                    </button>
                </form>
                  <a href="/admin/posts/create" class="subscribe-btn">Updates Todays' News</a>
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

    <footer>
        <h5>Stay in touch with the latest posts</h5>
        <p>Promise to keep the inbox clean. No bugs.</p>

        <form method="POST" action="#" style="display: flex; justify-content: center; align-items: center;">
            <input type="text" placeholder="Your email address" style="padding: 8px; margin-right: 10px;">
            <button type="submit" style="background-color: #3490dc; color: #fff; padding: 8px 15px; border-radius: 5px; cursor: pointer;">
                Subscribe
            </button>
        </form>
    </footer>

    <x-flash />

</body>
</html>