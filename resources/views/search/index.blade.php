<x-layout> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Search Results</h1>

    @if ($posts->isEmpty())
        <p>No matching results found.</p>
    @else
    <?php foreach ($posts as $post): ?>
    <?php
       $query = isset($_GET['query']) ? $_GET['query'] : '';
       $titleSimilarity = similar_text(mb_strtolower($query), mb_strtolower(substr($post->title, 0, 5)));
    ?>

    <?php if ($titleSimilarity >= 3): ?>
       <article style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
          <h1 style="color: #333; font-size: 24px;">
             <a href="/posts/{{$post->slug}}" style="text-decoration: none; color: #3490dc;">
                {!!$post->title !!}   
                @if(!empty($post->image_url))
                   <strong>has photo</strong>
                @endif
             </a>
          </h1>
          <p style="color: #666; font-size: 14px;">
             By <a href="/authors/{{$post->author->id}}" style="text-decoration: none; color: #3490dc;">{{$post->author->name}}</a>
             in <a href="/?categories/{{$post->category->slug}}" style="text-decoration: none; color: #3490dc;">{{$post->category->name }}</a>
          </p>
          <div style="color: #333; font-size: 16px; line-height: 1.6;">
             <?= $post->body; ?><br>
             <strong><?= $post->excerpt; ?></strong>
          </div>
       </article>
    <?php endif; ?>
 <?php endforeach; ?>
    @endif

</body>
</html></x-layout>   