<!DOCTYPE html>
<html>
<head>
	<title> Show Data </title>
</head>
<body>

<?php
	$number = $_POST['number'];
 	$data = $_POST['data'];
?>
<div class="col">
  <p>Amount</p>
  <input class='form-control' value='<?php echo $number ?>'/>  
 <input class='form-control' value='<?php echo $data ?>'/>  //It loads another page within page..
</div>

</body>
</html>