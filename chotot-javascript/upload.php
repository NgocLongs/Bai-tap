<?php   

    $countfiles = count($_FILES['file']['name']);
    $upload_location = "images/";
    $files_arr = array();

    for($i = 0;$i < $countfiles;$i++){

        $filename = $_FILES['file']['name'][$i];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $valid_ext = array("png","jpeg","jpg");

        if(($_FILES["file"]["size"][$i] <= 5000000) && in_array($ext, $valid_ext)) {

            $path = $upload_location.$filename;

            if(move_uploaded_file($_FILES['file']['tmp_name'][$i],$path)){
                $files_arr[] = $path;
            }  
        } 
    }

    echo json_encode($files_arr);
    die;
?>