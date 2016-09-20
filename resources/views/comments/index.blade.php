
    <div class="panel panel-default">
        <div class="panel-heading">Comments
        </div>
        <div class="panel-body">
            <ul class="list-group">
                @foreach ($ticket->comments as $comment)
                <li class="list-group-item">
                    <header>
                        <ul class="list-inline">
                            <li><span class="label label-info">{{ $comment->user->name }}</span></li>
                            <li><small>{{ $comment->CreatedAtDiff }}</small></li>
                        </ul>
                    </header>
                    <body>{{ $comment->body }}</body>
                    <footer>
                        <ul class="list-inline">
                            <li><a href="#"><small>reply</small></a></li>
                            <li><a href="#"><small>edit</small></a></li>             
                        </ul>
                    </footer>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
