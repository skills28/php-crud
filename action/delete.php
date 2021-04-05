<?php

include("../connect/conndb.php");

$id = $_GET['id'];

echo $id;

$query = "DELETE FROM post WHERE post_id='$id'";

if ($conn->query($query) === TRUE) {

  header("Location: ../public/index.php");
  exit();

} 

else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>