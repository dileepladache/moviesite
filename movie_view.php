 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/3.3/examples/jumbotron/jumbotron.css" rel="stylesheet">
	
	<!-- Jquery Script template -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	  <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
		
	  <!-- Custom Script  -->
     <script src="script.js"></script>

   
   
  </head>

  <body class="body">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#">Movies Library</a>
        </div>
            </div>
    </nav>

<br><br>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row" id="list_movies">
	  
<?php
$sql = "SELECT genre.name as genre_name, movies_list.name, movies_list.image_name,movies_list.id  , movie_details.description ,movie_details.duration, movie_details.release_date, movie_details.likes  FROM movies_list join genre on movies_list.genre = genre.id join movie_details on movies_list.id = movie_details.movie_id  Where movies_list.id = $_GET[id]";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          
?>

	   <div class="col-md-10 col-md-offset-1 " >
        <div class="panel panel-success">
		  <!-- Default panel contents -->
		  <div class="panel-heading title"><center><b><?php echo $row["name"]; ?> </b></center></div>
		  <ul class="list-group">
			<li class="list-group-item"><center><b><img class="img-rounded img-responsive" src ="<?php echo $row["image_name"]; ?>"></b></center> </li>
      <li class="list-group-item"><center><b><?php echo $row["description"]; ?> </b></center> </li>
			<li class="list-group-item"><center>Duration: <b><?php echo $row["duration"]; ?> </b></center> </li>      
			<li class="list-group-item"><center>Release Date: <b><?php echo $row["release_date"]; ?> </b></center> </li>
      <li class="list-group-item"><center>Genre: <b><?php echo $row["genre_name"]; ?> </b></center> </li>
      <li class="list-group-item"><center>Likes: <b><?php echo $row["likes"]; ?> </b></center> </li>
		   </ul>
		  <div class="panel-footer"> 
		<center>
		<a class="btn btn-primary vtn-lg btn-responsive" href="index.php">Back&nbsp&nbsp</a>

		</center>
		  </div>
		</div>
		</div>
<?php

 }
} 
?>
		
       </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
