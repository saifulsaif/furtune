<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mail Send</title>
    </head>
    <body>
        <h3 style="color:#00c85f;backgroung:rgba(10, 9, 9, 0.1)">Name Of Sender : {{$message->name}}</h3>

        <h4 style="color:#00c85f;backgroung:rgba(10, 9, 9, 0.1)">Age : {{$message->age}}</h4>
        <h4 style="color:#00c85f;backgroung:rgba(10, 9, 9, 0.1)">Appointment Date : {{$message->date .' '. $message->time}} </h4>
        <h4 style="color:#00c85f;backgroung:rgba(10, 9, 9, 0.1)">Mobile Number : {{$message->number}} </h4>
        <h4 style="color:#00c85f;backgroung:rgba(10, 9, 9, 0.1)">About : {{$message->about}}</h4>

        <h5 style="color:#00c85f;backgroung:rgba(10, 9, 9, 0.1)">{{ Config::get('app.url') }}</h5>
    </body>
</html>
