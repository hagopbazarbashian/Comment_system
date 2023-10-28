<div class="comment">
    <p>{{ $comment->comment_text }}</p>

    @if(count($comment->children) > 0)
        <div class="child-comments">
            @foreach($comment->children as $childComment)
                @include('comments.comment', ['comment' => $childComment])
            @endforeach
        </div>
    @endif
</div>
