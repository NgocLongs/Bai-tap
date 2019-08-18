<?php 
	
	$index = '';
	$error_index = '';

	
	if (isset($_POST['submit']))
	 {
		
		if (($_POST['index'] < 0)) {
			$error_index = "<span style='color: red;'>Please enter the index greater than or equal to 0 </span>";
		} else {
			$index = $_POST['index'];
		}		
	}

	
	// 1 1 2 2 3 3 4 4 ... n  n

	function GetValueOfIndex($index) {
		if ($index == 0) {
			return 1;
		}

		if ($index % 2 == 0) {
			return GetValueOfIndex($index - 1) + 1;
		} else {
			return GetValueOfIndex($index - 1);
		}
	}

	function GetValueOfIndex2($index) {
		$before = 1;
		$current = 1;

		for ($i = 1; $i <= $index; $i++) {
			if ($i % 2 == 0) {
				$current = $before + 1;
			} else {
				$current = $before;
			}
			$before = $current;
		}

		return $current;
	}	
	
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			body{
				width: 600px;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>
		<form class="form-group" action="index.php" method="POST">

			<label for="">Enter Index: </label>
			<input name="index" type="number" class="form-control" value='<?php echo isset($_POST['index'])? $_POST['index'] : '' ?>'><?php echo $error_index; ?><br>
			<input name="submit" type="submit" class="btn btn-default">
		</form>
		<?php 
			echo "Value At Index ".$index. " là " .GetValueOfIndex($index);
			echo "Value At Index ".$index. " là " .GetValueOfIndex2($index); 
		?>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<!-- <script src="Hello World"></script> -->
	</body>
</html>
