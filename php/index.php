<?php 
	$input = $index = '';
	$error_input = $error_index = '';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!empty($_POST['submit'])) {
			if (empty($_POST['input'])) {
				$error_input = "<span style='color:red;'>Please Enter input</span>";
			} else {
				$input = $_POST['input'];
			}

			if (empty($_POST['index'])) {
				$error_index = "<span style='color:red;'>Please Enter index</span>";
			} else {
				$index = $_POST['index'];
				if ($index > strlen($input)) {
					$error_index = "<span style='color:red;'>Index must less than input length</span>";
				}
			}

			if (!empty($_POST['input']) && !empty($_POST['index']) && ($index < strlen($input))) {
				echo "<br>Index = ".$index."   Value = ".$input[$index];
				echo "<br>Giá trị của chỉ số ".$index." là: ".substr($input, $index, 1);
			}
		}
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
			<label for="">Nhập vào dãy số</label>
			<input name="input" type="number" class="form-control" value='<?php echo isset($_POST['input']) ? $_POST['input'] : '' ?>'><?php echo $error_input; ?><br>

			<label for="">Nhập tham số</label>
			<input name="index" type="number" class="form-control" value='<?php echo isset($_POST['index'])? $_POST['index'] : '' ?>'><br><?php echo $error_index; ?><br>
			<input name="submit" type="submit" class="btn btn-default">
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
