Live Demo
<?php
   if(isset($_FILES['json'])){
      $errors= array();
      $file_name = $_FILES['json']['name'];
      $file_size =$_FILES['json']['size'];
      $file_tmp =$_FILES['json']['tmp_name'];
      $file_type=$_FILES['json']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['json']['name'])));
      
      $extensions= array("json","txt");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Valitud fail ei ole json ega txt vormigus.";
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"questions/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>