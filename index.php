<!DOCTYPE html>
<html>
<head>
    <title>Sample PHP Page</title>
</head>
<body>

  <h1>Database Connection!</h1>

  <?php
  // This is a PHP script section
  $myVariable = "This is a PHP variable.";

  echo "<p>$myVariable</p>";

  // You can also use PHP to perform various server-side tasks and generate dynamic content
  $currentDate = date("Y-m-d H:i:s");
  echo "<p>Current Date and Time: $currentDate</p>";
  ?>

  <hr>

<?php
  $servername = "www.mnserviceproviders.com:3307";
  $username = "root";
  $password = "yirjohn@123";
  $database = "mysql_dev";
  
  $docker_attachment_location_endpoint="";

  $connection = new mysqli($servername, $username, $password, $database);


  if ($connection->connect_error) 
  {
      die("Connection failed: " . $connection->connect_error);
  }

  echo "Connected to the database successfully";

  $query = "SELECT * FROM users" ;
  $result = $connection->query($query);

  if ($result) 
  {
      // Process the query results here
      while ($row = $result->fetch_assoc())
      {
          // Process each row of data
          echo "Column1: " . $row["user_id"] . ", Column2: " . $row["username"] . "<br>";
      }
      $result->free(); // Free up the result set
  } 
  else 
  {
      echo "Error executing query: " . $connection->error;
  }

  // Close the connection when you're done
  $connection->close();
?>

</body>
</html>
