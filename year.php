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
        <li class="active"><a href="year.php">Year</a></li>
        <li><a href="country.php">Country</a></li>
        <li><a href="addCountry.php">Add Country</a></li>
        <li><a href="addYear.php">Add city and year</a></li>
    </ul>
  </div>
</nav> 
    <body>
         <div class="container">
  <div class="row">
    <div class="col-sm-12">
        <form action = "year.php" method = "post">
<?php
$servername = "localhost";
$username = "siteuser";
$password = "mypass";
$dbname = "Olympics";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

  $sql = "SELECT ID, year FROM Olympiads";
        $result = $conn->query($sql);
        echo "<select name='categoryName'>";
        while ($row = $result -> fetch_assoc()) {
          echo '<option value="'.$row["ID"].'">'.$row["year"].'</option>';
        }
        echo "</select>";
        



$conn->close();
?>
<button type="submit" class="btn btn-info">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
</form>
<?php
$servername = "localhost";
$username = "siteuser";
$password = "mypass";
$dbname = "Olympics";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


 if($_POST['categoryName'])
 $categoryID=$_POST['categoryName'];


 if(isset($categoryID))
{
   // $categoryID=$_POST['categoryName'];
    $sql2 = "SELECT FirstName, LastName, YearID FROM Winners";
    $result2 = $conn -> query($sql2);

    echo "<table>";
        echo "<tr>";
         echo"Olympic Atheletes by Year: ";
         echo"</tr>";
         echo "<tr>";
        while ($row2 = $result2 -> fetch_assoc()){
            if ($categoryID == $row2["YearID"]){
                echo "<td>";
                echo $row2["FirstName"];
                echo " ";
                echo $row2["LastName"];
                echo "</td>";
         }
        }
        echo "</tr>";
    echo "</table>";
  $conn -> close(); 
}


?>
 </div> 
 </div>
 </div>
  </body>
</html>