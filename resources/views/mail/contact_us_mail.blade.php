<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mail Send</title>
    </head>
    <body>
        <h3 style="color:#00c85f;backgroung:rgba(10, 9, 9, 0.1)">Name Of Sender : {{$user_name}}</h3>
        <h4 style="color:#090c0a;backgroung:rgba(10, 9, 9, 0.1)">Mobile Number : {{$mobile}} </h4>
        <h4 style="color:#090c0a;backgroung:rgba(10, 9, 9, 0.1)">Client Message  : {{$compliment}}</h4>

        <h5 style="color:#090c0a;backgroung:rgba(10, 9, 9, 0.1)">All Right Reserved : {{ Config::get('app.url') }}</h5>
    </body>
</html>
