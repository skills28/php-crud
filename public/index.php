<?php 

include("../include/header.php");
include("../connect/conndb.php");

?>

<div class="container">
  
  <div class="row">
   	 
<div class="col-lg-12 col-sm-12">
   	 	<h2>My New Post List?</h2>
      <br>

<?php

   $sql = "SELECT * FROM post ORDER BY post_id DESC";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>

   <div class="card text-black bg-light">
      <div class="card-header bg-dark">
        <h3><a href="update.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['title'];?></a></h3>
   </div>
   	 	<div class="card-body">
      <p class="text-justify">
      <?php echo $row['description']; ?>
      </p>
      <b class="text-danger float-right"> <a href="../action/delete.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['languages']; ?></a></b>
   	 	</div>
   </div>
   <br>
<?php
}
}
else {
?>
<b><?php echo "No records found in database ..."; ?></b>
<?php
}
?>   


</div>
 <!-- end colum div -->
</div>
   <!-- end row div -->
</div>
   <!-- end main div -->
<?php include("../include/footer.php"); ?>