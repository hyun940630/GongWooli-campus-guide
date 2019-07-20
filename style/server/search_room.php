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

  $searchTerm = $_GET['fnr'];
  $query = "SELECT * FROM room WHERE room_fnr = '" . $searchTerm . "'";
  $queryResult = mysqli_query($conn, $query);

  $searchResult;

  while($row = mysqli_fetch_array($queryResult)) {
    echo $row['room_maj_no'] . "#" . $row['room_fnr'] . "#" . $row['room_nm'] . "#" . $row['room_nm_2'] . "#" . $row['use_dept_nm'] . "#" . $row['use_nm'] . "#" . $row['room_usr'] . "#" . $row['floor'] . "#" . $row['section'] . "#" . $row['path'] . "#" . $row['tel'] . "$";
  }
?>
