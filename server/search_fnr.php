<?php
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: GET, POST, PUT');
  header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

  $conn = mysqli_connect(
    'localhost',
    'root',
    'gongwooli',
    'gongwooli'
  );

  mysqli_query($conn, "SET NAMES utf8");

  $searchTerm = $_GET['search'];
  $query = "SELECT DISTINCT room_fnr FROM search_keyword WHERE keyword LIKE '%" . $searchTerm . "%'";
  $queryResult = mysqli_query($conn, $query);

  $searchResult;

  while($row = mysqli_fetch_array($queryResult)) {
    echo $row['room_fnr'] . "$";
  }
?>
