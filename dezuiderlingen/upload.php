<?php
 if(isset($_POST['sb_submit'])){
    $name       = $_FILES['file']['name'];
    $temp_name  = $_FILES['file']['tmp_name'];
    if(isset($name)){
        if(!empty($name)){
            $location = 'uploads/';
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }
    }  else {
        echo 'You should select a file to upload !!';
    }
}
?>
