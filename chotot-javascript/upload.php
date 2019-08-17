<?php
    if (isset($_POST) && !empty($_FILES['file'])) {
        
        $fileExtension = explode('.', $_FILES['file']['name']); 
        $fileExtension = $fileExtension[(count($fileExtension) - 1)]; 
        $fileExtension = strtolower($fileExtension);        
        // print_r($fileExtension);
        // print_r($_FILES['file']);
        
        // Kiểm tra xem có phải file ảnh không
        if ($fileExtension === 'jpg' || $fileExtension === 'png' || $fileExtension === 'jpeg') {
            // tiến hành upload
            if (move_uploaded_file($_FILES['file']['tmp_name'], 'images/' . $_FILES['file']['name'])) {
                die('Upload thành công file: ' . $_FILES['file']['name']); 
            } else { 
                die('Có lỗi!'. $_FILES['file']['error']); 
            }
        } else { 
            die('Chỉ được upload ảnh'); 
        }
    } else {
        die('Lock'); 
    }





    // if (isset($_POST) && !empty($_FILES['file'])) {
    //     $j = 0; //Variable for indexing uploaded image 

    //     $target_path = "images/"; 
    //     for ($i = 0; $i < count($_FILES['file']['name']); $i++) { 

    //         $validextensions = array("jpeg", "jpg", "png"); 
    //         $ext = explode('.', basename($_FILES['file']['name'][$i]));  
    //         $file_extension = end($ext); 

    //         $target_path = $target_path.md5(uniqid()). ".".$ext[count($ext) - 1]; //set the target path with a new name of image
    //         $j = $j + 1; //increment the number of uploaded images according to the files in array       

    //         if (($_FILES["file"]["size"][$i] < 5000000) 
    //             && in_array($file_extension, $validextensions)) {
    //             if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) { 
    //                 echo $j.
    //                 ').<span>Image uploaded successfully!.</span><br/><br/>';
    //             } else { 
    //                 echo $j.
    //                 ').<span>please try again!.</span><br/><br/>';
    //             }
    //         } else { 
    //             echo $j.
    //             ').<span>***Invalid file Size or Type***</span><br/><br/>';
    //         }
    //     }
    // }
?>