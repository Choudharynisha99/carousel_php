<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid d-flex">
	  	<div class="container">
	  		  <a class="navbar-brand text-light" href="#">DynamicKaran</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  	</div>
	    <div class="container collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
	        <li class="nav-item">
	          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active text-light" href="#">About</a>
	        </li>
	         <li class="nav-item">
	          <a class="nav-link active text-light" href="#">Contact</a>
	        </li>
	      </ul>
	    </div>
  </div>
</nav>

<!-- navbar end -->
<div class="container-fluid d-flex">
<?php 

$con = mysqli_connect("localhost","root","","dynamic");

$query = mysqli_query($con, "SELECT * FROM `upload`");

if($query){



 ?>

	<!-- carousel-->
   <div class="container mt-3">
		 <div id="carouselExample" class="carousel slide">
		 	 <div class="carousel-inner">
		 	<?php 
             foreach ($query as $key => $value) {
             	// code...
              if($value['id'] == '1'){

		 	 ?>
	  
	     <div class="carousel-item active " style="height: 200px;">
	      <img src="<?=$value['img'];?>" class="d-block h-100" alt="...">
	     </div>
	               <?php
                        }else{

                            echo '<div class="carousel-item ">
                										<img src="'.$value['img'].'" class="d-block w-100" alt="">
           											 </div>';
	

							            }
						             }
						           }
    
              ?>
	   </div>
       </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	  </div>
	<!-- carousel end -->


	<!-- form -->
	<div class="container w-30 mt-3 p-3" style="border: 1px solid black;">
		<form action="insert.php" method="post" enctype="multipart/form-data">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="pass">
    </div>
  </div>
   <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputPassword3" name="fileok">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="sbm">Submit</button>
</form>
	</div>
	<!-- form end -->
</div>


</body>
</html>
