<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" />
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="flex-container">
    <div class="flex-container-left"><p>{{round($response['data']['forecast'][0]['temperature'])}}°</p>
        <h1 class="city">LVIV</h1></div>
    <div class="flex-container-right">
        <img class="icon" src="/icon/{{$response['data']['forecast'][0]['icon']}}.png">
    </div>
    <div class="flex-container-right-footer">
        <img class="icon1" src="/icon/1.png" >
        <h1 class="number">{{$response['data']['forecast'][0]['humidity']}}</h1>
        <h1 class="number1">ММ</h1>
        <img class="icon2" src="/icon/2.png">
        <h1 class="number2">{{$response['data']['forecast'][0]['windSpeed']}}</h1>
        <h1 class="number3">MPH</h1>
    </div>
</div>
</body>
</html>


