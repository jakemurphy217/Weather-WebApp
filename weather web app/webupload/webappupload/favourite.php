<?php 
 
   $user = 'root';
   $pass = '';
   $db = 'city';
   
   $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   echo "Connected successfully <br> <br>";

   $sql = "SELECT * FROM favourite";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "ID: " . $row["id"] . "<br> city 1: " . $row["CITY1"]. "<br>" . " city 2: " . $row["CITY2"]. "<br>" . " city 3: " . $row["CITY3"] . " " . "<br>";
	}
	} else {
	echo "0 results";
	}

	//insert
	if(isset($_POST['save']))
	{
		$sql = "INSERT INTO favourite (CITY1, CITY2, CITY3)
		VALUES ('".$_POST["CITY1"]."','".$_POST["CITY2"]."','".$_POST["CITY3"]."')";

		$result = mysqli_query($conn,$sql);
	}

	//update
//if(isset($_POST['update']))
//	{
		//$sql="UPDATE favourite SET CITY1='".$_POST["CITYz"]."', CITY2='".$_POST["CITYx"]."', CITY3 = '".$_POST["CITYc"]."' WHERE id='".$_POST["id2"]."'" or die ("this stuffed up");

	//	$result = mysqli_query($conn,$sql);
	
	//delete
	if(isset($_POST['delete']))
	{
		$sql="DELETE FROM favourite WHERE id='".$_POST["id3"]."'" or die ("this stuffed up");

		$result = mysqli_query($conn,$sql);
	}
	
	
	
	$conn->close();



?>

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
<body id="favouritebody">

<nav class="navbar navbar-default" style="margin-bottom:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">City Weather</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="home.php">Home</a></li>
      <li><a href="search.php">search</a></li>
      <li class="active"><a href="favourite.php">favourite</a></li>
      <li><a href="login.php">contact</a></li>
    </ul>
  </div>
</nav>
  
<div class="jumbotron" style="margin-bottom:0;">
  <h1>City Weather</h1> 
  <p>this is a website for keeping up to date with the weather in your favourite places!!
      </p> 
	</div>
	
	<div class="center">
	
<div class="container-fluid">
  <h2>Please enter your 3 favourite place</h2> 
  
  
  
  <div >
		<h2><b><ul>ADD</ul></b></h2>
	<form action="favourite.php" method="post"> 
	<label id="first"> city 1:</label><br/>
	<input type="text" name="CITY1"><br/>

	<label id="first">city 2:</label><br/>
	<input type="text" name="CITY2"><br/>

	<label id="first">city 3:</label><br/>
	<input type="text" name="CITY3"><br/>

		<button type="submit" name="save" class="btn">add</button>
	
	<br>
	
	<h2><b>UPDATE</b></h2>
	<form action="favourite.php" method="post"> 
	
	<label id="first">ID:</label><br/>
	<input type="text" name="id2"><br/>
	
	<label id="first"> City 1:</label><br/>
	<input type="text" name="CITYz"><br/>

	<label id="first">city 2:</label><br/>
	<input type="text" name="CITYx"><br/>

	<label id="first">city 3:</label><br/>
	<input type="text" name="CITYc"><br/>

	<button type="submit" name="update" class="btn">update</button>

	
	<h2><b>DELETE</b></h2>
	<form action="favourite.php" method="post"> 
	
	<label id="first">ID:</label><br/>
	<input type="text" name="id3"><br/>

	<button type="submit" name="delete" class="btn">delete</button>
		
		</div>
</div>
		</div>
		<!-- displaying the database
					it wouldnt work and would not be able to run the webpage

		 <!--<div class="col-lg-4">
		<table border=50 cellpadding=1 cellspacing=50>
			
			<tr>
			
			<th>id</th>
			<th>city 1</th>
			<th>city 2</th>
			<th>city 3</th>
			
			</tr>
			
		<?php
			//make connection
			
			
			//selecting database
			//if(!mysqli_select_db($conn, 'city')) {
				
//echo"database not selected";
			//}
			
			//select query
			//$sqli = "SELECT * FROM favourite";
			
			//execute the sql query
		//$records = mysqli_query($conn, $sqli);
			
			//while($row = mysqli_fetch_array($records)) {
				
				// "<tr>";
				//echo "<td>".row['id']. "</td>";
				//echo "<td>".row['CITY1']. "</td>";
				//echo "<td>".row['CITY2']. "</td>";
				//echo "<td>".row['CITY3']. "</td>";
				//echo "</tr>";
		//	}
			
			?>
			-->
			
		</table>
		</div>
		
		
		
  </div>
</body>
</html>