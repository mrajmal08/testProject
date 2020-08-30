<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Table</h2>
	<button type="button" class="btn btn-default"><a href="create.php">Create New</a> </button>
 <table class="table table-bordered table-responsive table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
	  <?php
	  $query = "SELECT * from user";
	  $exe = mysqli_query($conn, $query);
	  while($row = mysqli_fetch_assoc($exe)){
	  
	  ?>
	  
    <tr>
      <th scope="row"><?= $row['name']; ?></th>
      <td><?= $row['email']; ?></td>
      <td><?= $row['gender']; ?></td>
      <td><button type="button" class="btn btn-info">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
   
	 <?php
	  }
	  ?>
  </tbody>
</table>


	</div>

</body>
</html>
