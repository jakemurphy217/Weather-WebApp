$(document).ready(function(){
   
    $('#submitWeather').click(function(){
        var city= $("#city").val();
        
        if(city !==''){
            
            $.ajax({
              // url:'http://samples.openweathermap.org/data/2.5/weather?zip=94040,uk&appid=d39e32dccafc4fd5f6139460ecee27c5',
                url:'https:api.openweathermap.org/data/2.5/weather?q=' + city + "&units=metric" + "&APPID=d39e32dccafc4fd5f6139460ecee27c5",
                type: "GET",
                dataType:"jsonp",
                success: function(data){
                var widget = show(data);
                  
                  $("#show").html(widget);
                  $("#city").val('');
                  console.log(data);
                }
               
            });
            
            
        }else{
            $("#error").php("field cannot be empty");
        }
    });
                              
});

function show(data){
  
  return "<h2>live weather for" + " " +    data.name + "," + data.sys.country +"</h2>" +
         "<h2>Weather:" +                  data.weather[0].main +"</h2>" +
         "<h2>Description:" +              data.weather[0].description +"</h2>"+
         "<h2>Temperature:" +              data.main.temp +" &deg;C</h2>" +
         "<h2>Humidity:" +                 data.main.humidity +"%</h2>" +
         "<h2>Min Temperature:" +          data.main.temp_min +"&deg;C</h2>" +
         "<h2>Max Temperature:" +          data.main.temp_max +"&deg;C</h2>" +
         "<h2>Atmospheric pressure:" +     data.main.pressure +"hPa</h2>" +
         "<h2>Wind Speed:" +               data.wind.speed +"m/s</h2>" +
         "<h2>Wind Direction:" +           data.wind.deg +"&deg;</h2>";
}
