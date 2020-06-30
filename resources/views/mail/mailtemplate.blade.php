<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mail Send</title>
    </head>
    <body>
        <h3 style="color:#00c85f;backgroung:rgba(10, 9, 9, 0.1)">Name Of Sender : {{$name}}</h3>

        <h5 style="color:#090c0a;backgroung:rgba(7, 1, 1, 0.1)">Age : {{$age}}</h5>
        <h5 style="color:#090c0a;backgroung:rgba(10, 9, 9, 0.1)">Appointment Date : {{$date .' '. $time}} </h5>
        <h4 style="color:#090c0a;backgroung:rgba(10, 9, 9, 0.1)">Mobile Number : {{$number}} </h4>
        <h4 style="color:#090c0a;backgroung:rgba(10, 9, 9, 0.1)">About : {{$about}}</h4>

        <h5 style="color:#090c0a;backgroung:rgba(10, 9, 9, 0.1)">All Right Reserved : {{ Config::get('app.url') }}</h5>
    </body>
</html>
