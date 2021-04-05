<?php 

include("../include/header.php");
include("../connect/conndb.php");
$post_id = $_GET['id'];
$query = "SELECT * from post WHERE post_id='$post_id'";
$result = $conn->query($query);
?>

<div class="container">
  
  <div class="row">
   	 
   	 <div class="col-lg-12 col-sm-12">
<?php
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>


<div class="card">
  
  <div class="card-header bg-success text-dark">
    <h5>Update Old Post?</h5>
  </div>

    <div class="card-body">
      
      <form action="../action/edit.php" method="Post">
        
        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="name" class="form-control" placeholder="Enter title here ..." name="title"
          value="<?php echo $row['title']; ?>">
        </div>

        <div class="form-group">
          <label for="description">Post Description</label>
          <textarea class="form-control" rows="8" name="description"><?php echo $row['description']; ?></textarea>
        </div>
  
      <div class="form-group">
          <label for="title">Computer Language</label>
          <input type="name" class="form-control" placeholder="Enter title here ..." name="languages"
          value="<?php echo $row['languages']; ?>">
      </div>
      
      <input type="hidden"  name="id" value="<?php echo $row['post_id']; ?>"> 

       <button type="submit" class="btn btn-success float-right">Edit Post</button>

</form>

</div>

</div>


<?php

  }
} else {
  echo "0 results";
}

?>

  </div>
   	 <!-- end colum div -->
  </div>
    <!-- end row div -->
</div>
<!-- end main div -->
<?php include("../include/footer.php"); ?>