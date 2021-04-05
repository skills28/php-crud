<?php

include ("../connect/conndb.php");

$postTitle = mysqli_real_escape_string($conn, $_POST['title']);
$postDescription = mysqli_real_escape_string($conn, $_POST['description']);
$progLanguage = mysqli_real_escape_string($conn, $_POST['languages']);
$id = mysqli_real_escape_string($conn, $_POST['id']);

$query = "UPDATE post SET title='$postTitle' , description='$postDescription' , languages='$progLanguage' WHERE post_id='$id'";

if ($conn->query($query) === TRUE) {
      header("Location: ../public/index.php");
    exit();
} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>