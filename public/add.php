<?php include("../include/header.php"); ?>

<div class="container">
  
  <div class="row">
   	 
   	 <div class="col-lg-12 col-sm-12">
	 	
     
     <div class="card">
       
       <div class="card-header bg-info"><h3>Create Post</h3></div>
       
       <div class="card-body">
         
         <form action="../action/insert.php" method="Post">
        
        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="name" class="form-control" placeholder="Enter title here ..." name="title">
        </div>

        <div class="form-group">
          <label for="description">Post Description</label>
          <textarea class="form-control" rows="6" name="description"></textarea>
        </div>
  
      <div class="form-group">
      <label for="languages">Select Language</label>
      <select class="form-control" name="languages">
        <option>Java Basic</option>
        <option>PHP Basic</option>
        <option>Kotlin Basic</option>
        <option>Asp.net Basic</option>
        <option>C++ Basic</option>
        <option>Python Basic</option>
        <option>HTML Basic</option>
        <option>Javascript Basic</option>
        <option>C Sharp Basic</option>
        <option>Objective-C Basic</option>
        <option>Swift Basic</option>
        <option>Android Basic</option>
      </select>
    </div>

       <button type="submit" class="btn btn-primary float-right">Create Post</button>

</form>


       </div>

     </div>
    


  </div>
   	 <!-- end colum div -->
  </div>
    <!-- end row div -->
</div>
<!-- end main div -->
<?php include("../include/footer.php"); ?>