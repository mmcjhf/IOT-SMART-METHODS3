<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>result page</title>
  </head>
  <style media="screen">
  body {
    background: lightblue;
    opicty: 0.8;
    text-align:
    align-items: center;
  }
  </style>
  <body>
    <h1>result</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "task3";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(empty($_GET['value']))
    {
      echo "failed";
    }
    else{
      $value=$_GET['value'];
      echo "Successfully submited: ".$_GET['value'];
      echo " into Database";
    }

    $sql = "INSERT INTO integar VALUES ($value)";
    mysqli_query($conn, $sql);
     ?>

  </body>
</html>
