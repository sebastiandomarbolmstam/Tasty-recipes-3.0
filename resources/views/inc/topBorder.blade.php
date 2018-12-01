<div class="flex-header">
    @if($title == 'Home')
        <h1 id="title">{{config('app.name', 'Tasty Recipes')}}</h1>
    @else
<h1 id="title">{{$title}}</h1>
    @endif
</div>
