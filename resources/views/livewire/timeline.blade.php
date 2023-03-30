<div>
    @foreach($tweets as $tweet)
        <div>
            {{ $tweet->body }}
        </div>
    @endforeach
</div>
