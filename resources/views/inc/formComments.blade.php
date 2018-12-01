
<div class="comment-container">
{!! Form::open(['action' => ['CommentsController@store', $title], 'method' => 'POST']) !!}
    <div class="form-group">
    {{Form::label('comment', 'Comment')}}
    {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Enter comment'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>