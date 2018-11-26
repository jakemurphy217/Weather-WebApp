<!DOCTYPE html>
<html lang="en">
<head>
  <title>current Weather</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="style.css">
</head>
<body id="searchbody">

<nav class="navbar navbar-default" style="margin-bottom:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">City Weather</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="search.php">search</a></li>
      <li><a href="favourite.php">favourite</a></li>
      <li><a href="login.php">contact</a></li>
    </ul>
  </div>
</nav>
  
<div class="jumbotron" style="margin-bottom:0;">
  <h1>Search a destination!!</h1> 
  <p>these Weather results are updated every few minutes so is accuarte</p> 
</div>
<div class="container-fluid">
 
  	<div>
    <div class="center">
        <div class="row" style="margin-bottom:20px;">
        
                <h3 class="text-center
                           text-primary" id="waffle">please enter city</h3>
            
                 <span id="error"></span>
            
        </div>
        
            <div class="row form-group form-inline text-center" id="rowDiv">
                <input type="text" 
                       name="city" 
                       id="city" 
                       class="form-control" 
                       placeholder="city name">
                
                
                <button id="submitWeather" class="btn btn-primary">Search City</button>
                
            </div>
        <div id="show" class="text-center"> </div>
        
        
    </div>
  
  
</div>
  
 

  <script src="weather.js"> </script>
</body>
</html>