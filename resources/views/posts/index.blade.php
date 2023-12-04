<x-layout>

   <body>
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
               in <a href="/?categories/{{$post->category->slug}}" style="text-decoration: none; color: #3490dc;">{{$post->category->name }}</a>
            
            </p>
            <div style="color: #333; font-size: 16px; line-height: 1.6;">
               <?= $post->body; ?><br>
               <strong><?= $post->excerpt; ?></strong>
            </div>
         </article>
      <?php endforeach; ?>
   </body>

</x-layout>