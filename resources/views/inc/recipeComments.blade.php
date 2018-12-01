<?php use \App\Http\Controllers\CommentsController; ?>
<?php $ComController = new CommentsController(); ?>
<?php $comments = $ComController->showComments($title); ?>

@if(count($comments) > 0)
    @foreach($comments as $comment)
    <div class="comment-box">
        <div class="row">
        <h3 class="username">{{$comment -> uid}}</h3>
        <p class="date">{{$comment -> created_at}}</p>
        </div>
        <div class="row">
            <h3 class="message">{{$comment -> message}}</h3>
        </div>
        @if(!Auth::guest())
            @if($comment->uid == auth()->user()->name)
            <div class="row">
                {!!Form::open(['action' => ['CommentsController@destroy', $comment->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger delete'])}}
                {!!Form::close()!!}
            </div>
            @endif
        @endif
    </div>
    @endforeach
@else
    <p>No comments found</p>
@endif
