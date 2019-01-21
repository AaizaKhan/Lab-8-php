<!DOCTYPE html>
<html>
<head>
	<title>task1</title>
</head>
<body>
  <form method="post">
  	 <label>Name</label> <br>
  	 <input type="text" placeholder="Enter name" name="name"> <br>
  	 <label>Phone Number</label> <br>
  	 <input type="number" placeholder="Enter phone number" name="number"> <br>
  	 <input type="submit" name="submit">
  </form>

  <?php
  if (array_key_exists('submit',$_POST)) {
  	  $name = $_POST['name'];
      $number = $_POST['number'];

      echo "Name : $name <br>"; 
      echo "Phone Number: $number";
  }


  ?>
</body>
</html>