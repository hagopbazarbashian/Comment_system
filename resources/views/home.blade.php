<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/comment.css')}}">
    <title>Comments</title>
</head>
<body>

    <h1>Comments</h1>

    <div class="comments">
        @foreach($comments as $comment)
            @include('comments.comment', ['comment' => $comment])
        @endforeach
    </div>

    <form method="post" action="{{ route('comment') }}">
        @csrf
        <div class="comment">
            <textarea name="comment_text" placeholder="Write your comment..."></textarea>
            <button type="submit">Leave Comment</button>
        </div>
    </form>

</body>
<script src="{{asset('assets/js/iziToast.min.js')}}"></script>
@if ($errors->any())
@foreach ($errors->all() as $error)
<script>
    iziToast.error({
    title: '',
    position: 'topRight',
    message: '{{ $error }}',
});
</script>
@endforeach

@endif

@if (session()->get('error'))
<script>
    iziToast.error({
    title: '',
    position: 'topRight',
    message: '{{ session()->get('error') }}',
});
</script>
@endif

@if (session()->get('succes'))
<script>
    iziToast.success({
    title: '',
    position: 'topRight',
    message: '{{ session()->get('succes') }}',
});
</script>
@endif
</html>
