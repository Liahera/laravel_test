<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>HTML5</title>

  <style>
      .even {
          background-color: rgba(0,0,0,0.4);
      }
      .weatherItem {
          padding: 0.8em;
          text-align: right;
          color: #fff;
          float: right;
          width: 18%;
          margin-right: 600px;
      }
      .icon{
          position: relative;
      }
      .icon:before{
          position: absolute;
          left: 50px;
      }
      .weatherDesc, .weatherCity, .weatherForecastDay {
          font-weight: 600;
      }
      .weatherCity {
          text-transform: uppercase;
      }
      .weatherTemp {
          font-size: 28px;
          font-weight: 900;
      }
      .weatherDesc {
          margin-bottom: 0.4em;
      }
      .weatherRange, .weatherWindSpeed, .weatherWindGust, .weatherForecastItem {
          font-size: 0.8em;
      }
      .weatherLink, .weatherForecastItem {
          margin-top: 0.5em;
          text-align: left;
      }
  </style>
 </head>
 <body>
      <div class="weatherItem even day">
          <img class="icon" src="https://assetambee.s3-us-west-2.amazonaws.com/weatherIcons/PNG/{{$icon}}.png">
          <div class="weatherCity">Харьков</div>
          <div class="weatherTemp">{{round($response->data->forecast[0]->temperature)}}°C</div>
          <div class="weatherDesc"> {{$response->data->forecast[0]->summary}}</div>
          <div class="weatherRange">Влажность:{{$response->data->forecast[0]->humidity}}</div>
          <div class="weatherWindSpeed">Скорость ветра:{{($response->data->forecast[0]->windSpeed)*1.61}} км/час</div>
          <div class="weatherWindGust">Порыв ветра:{{($response->data->forecast[0]->windGust)*1.61}} км/час </div>
      </div>
 </body>
</html>
