<?php

include ("../connect/conndb.php");

$postTitle = mysqli_real_escape_string($conn, $_POST['title']);
$postDescription = mysqli_real_escape_string($conn, $_POST['description']);
$progLanguage = mysqli_real_escape_string($conn, $_POST['languages']);


$sql = "INSERT INTO post(title, description , languages)
VALUES ('$postTitle', '$postDescription', '$progLanguage')";

if ($conn->query($sql) === TRUE) {
      header("Location: ../public/index.php");
    exit();
} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>