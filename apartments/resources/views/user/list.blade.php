<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
              integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
              crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <header>
            <div>
                <i class="fas fa-home 5x"></i>
                <div>Sweet Home</div>
            </div>
        </header>
        <div>
            <div class="row">
                <div class="col-md-2">
                    <a href="#">Home</a>
                </div>
                <div class="col-md-2">
                    <a href="#">Best Home</a>
                </div>
                <div class="col-md-2">
                    <a href="#">Life Style</a>
                </div>
                <div class="col-md-2">
                    <a href="#">About us</a>
                </div>
                <div class="col-md-2">
                    <a href="#">Contact us</a>
                </div>
            </div>
            <div class="row">
                @foreach($list_obj as $item)
                    <div class="col-md-2">
                        <img src="{{$item -> images}}" alt="" style="width: 100px">
                        <h3>{{$item ->name}}</h3>
                        <div>{{$item -> overView}}</div>
                        <div>{{$item -> price}}</div>
                        <div style="width: 200px">{{$item -> detail}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>