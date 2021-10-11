
    <strong class="commentlist"> {{$comment->name}}  </strong> says
      <span class="commentlist"> on {{$comment->created_at->toFormattedDateString()}}</span>
        <div>
            <p>{{$comment->comment}}</p>
        </div>

         @include('includes.commentreply', ['parentId' => $comment->id])

         @if (isset($comments[$comment->id]))
             @include('includes.commentlist', ['collection' => $comments[$comment->id]])
         @endif

       
   
   