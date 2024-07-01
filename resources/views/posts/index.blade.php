<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<x-layout>
   <style>
      input {
         width: 400px;
      }
   </style>
   <body>
<<<<<<< HEAD
      <body>
         @if(!empty(Auth::id()))
             <form action="/search" method="get">
                <input type="text" name="query" placeholder="search">
                <button type="submit">Search</button>
             </form>
         @else
             <input type="text" name="query" placeholder="you should have an account to use this feature">
         @endif
         <?php foreach ($posts as $post): ?>
         <article class="mb-6 p-6 border border-gray-300 rounded-lg shadow-lg bg-white">
             <h1 class="text-2xl text-indigo-600 font-bold mb-4 hover:underline">
                 <a href="/posts/{{$post->slug}}">
                     {!! $post->title !!}
                    
                 </a>
             </h1>
             <p class="text-sm text-gray-600 mb-4">
                 By <a href="/authors/{{$post->author->id}}" class="text-indigo-500 hover:underline">{{ $post->author->name }}</a>
                 in <a href="/categories/{{$post->category->slug}}" class="text-indigo-500 hover:underline">{{ $post->category->name }}</a>
             </p>
             <div class="text-gray-700 text-base leading-7">
                 <?= $post->body; ?><br>
                 <strong><?= $post->excerpt; ?></strong>
             </div>
=======
      <?php foreach ($posts as $post): ?>
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
               in <a href="/categories/{{$post->category->slug}}" style="text-decoration: none; color: #3490dc;">{{$post->category->name }}</a>
            
            </p>
            <div style="color: #333; font-size: 16px; line-height: 1.6;">
               <?= $post->body; ?><br>
               <strong><?= $post->excerpt; ?></strong>
            </div>
>>>>>>> 1b6b05772ecf23153adb04a477218fe35139f0a4
         </article>
     <?php endforeach; ?>
   </body>


</x-layout>