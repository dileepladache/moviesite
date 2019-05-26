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

$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;   


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

    <title>Movies | Ajency.in</title>

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

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Movies Library !</h1>
      </div>
    </div>
	
<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
		    <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#genre">Genre</a></li>
                      <li><a href="#title">Title</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input id="search" type="text" class="form-control" name="x" placeholder="Search Movie...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
	</div>
	<hr>
</div>

<br><br>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row" id="list_movies">
	  
<?php
$sql = "SELECT genre.name as genre_name, movies_list.name, movies_list.image_name,movies_list.id FROM movies_list join genre on movies_list.genre = genre.id LIMIT $start_from, $limit";
$result = mysqli_query($conn, $sql);
/* echo '<pre>';
print_r(mysqli_fetch_assoc($result));
exit; */

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          
?>


	   <div class="col-md-4 movie" genre="<?php echo $row["genre_name"]; ?>" title="<?php echo $row["name"]; ?>" id="<?php  echo $row["id"]; ?>">
        <div class="panel panel-success">
		  <!-- Default panel contents -->
		  <div class="panel-heading title"><center><b><?php echo $row["name"]; ?> </b></center></div>
		  <ul class="list-group">
        
            <li class="list-group-item"><center><b><img class="img-rounded img-responsive" src ="<?php echo $row["image_name"]; ?>"></b></center> 
            <div class="middle">
            <div class="text"><?php echo $row["name"];  ?>

          </div>
         
            </div>
            </li>
          
			<li class="list-group-item"><center><b><?php echo $row["genre_name"]; ?> </b></center> </li>
		   </ul>
		  <div class="panel-footer"> 
		<center>
		  
	<a class="btn btn-primary btn-block btn-responsive" href="movie_view.php?id=<?php  echo $row["id"]; ?>">View&nbsp&nbsp</a>
		 


		</center>
    </div>
		</div>
		</div>
<?php

 }
} 
?>
		
       </div>
<?php  
$sql = "SELECT COUNT(id) FROM movies_list";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  


 $pagLink = "<center><nav><ul class='pagination'>";  

        for ($i=1; $i<=$total_pages; $i++) {  
                     $pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav></center>";  
?>


      <hr>

      <footer>
        <p>&copy; 2019 Dileep</p>
      </footer>
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
