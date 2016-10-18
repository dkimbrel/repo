<!DOCTYPE html>
<html>
            <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Olympics Database</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
        <li><a href="year.php">Year</a></li>
        <li><a href="country.php">Country</a></li>
        <li class="active"><a href="addCountry.php">Add Country</a></li>
        <li><a href="addYear.php">Add city and year</a></li>
    </ul>
  </div>
</nav>
    <body>
         <div class="container">
  <div class="row">
    <div class="col-sm-12">
        <form action="addCountry.php" method = "post">
 Country Name: <input type="text" name="country"><br> 
<?php
$servername = "localhost";
$username = "siteuser";
$password = "mypass";
$dbname = "Olympics";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($_POST['country']){
   
$country=$_POST['country'];
 if(isset($country)){
$sql = "INSERT INTO Countries (Country) VALUES ('$country')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>
 <button type="submit" class="btn btn-info" >
      <span class="glyphicon glyphicon-plus"></span> Add
    </button>
</form>
</div>
</div>
</div>
    </body>
</html>