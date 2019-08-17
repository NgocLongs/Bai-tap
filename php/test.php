<?php 
	// $input = $_POST['input'];
	// $index = $_POST['index'];
	if (empty($_POST['input'])) {
		echo "<span style='color:red;'>Please Enter input</span><br>";
	} else {
		$input = $_POST['input'];
	}

	if (empty($_POST['index'])) {
		echo "<span style='color:red;'>Please Enter index</span>";
	} else {
		$index = $_POST['index'];
	}

	if (!empty($_POST['input']) && !empty($_POST['index'])) {
		echo "Dãy số là: ".$input;
		echo "<br>Index = ".$index;
		echo "<br>Value = ".$input[$index];
		echo "<br>Giá trị của chỉ số ".$index." là: ".substr($input, $index, 1);
	}
?>