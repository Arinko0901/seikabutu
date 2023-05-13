<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1 class="title">
                {{ $post->title }}
            </h1>
            <div class="content">
                <div class="content__post">
                    <p>{{ $post->body }}</p>    
                </div>
            </div>
            <div class ="image">
                <p>{{$post->image}}</p>
            </div>
        </div>
        <div>
            <div>
                @foreach
                <p>{{$comment->id}}</p>
                <p>{{$comment->body}}</p>
                @endforeach
            </div>
            <div>
                <p>good botton</p>
            </div>
        </div>
    </body>
</html>