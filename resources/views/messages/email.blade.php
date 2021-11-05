<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: #1a1e21;">
<div style="color: white; margin-left: 5vw; ">
    <h2>{{$title}}</h2>
    <div>
        <p>Hello {{$toName}}</p>
    </div>
    <br>
    <div>
        <p>{!! nl2br($content) !!}</p>
    </div>
    <br>
    <div>
        <p>Best regards</p>
        <p>{{$fromName}}</p>
    </div>
</div>
<div class="bg-dark" >
    <img src="{{asset('images/elev8-logo-nobg.png')}}" alt="logo"
         style="
         width: 20vw;
         height: 20vw;
         display: block;
         margin-left: 2vw;
    ">
</div>
</body>
</html>
