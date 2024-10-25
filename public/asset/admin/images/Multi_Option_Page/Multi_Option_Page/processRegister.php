<?php
    require_once('dbconn.php');

    extract($_POST);
    $firstname  = $firstname;
    $username   = $username;
    $othername  = $othername;
    $password  = md5($password);
    $email      = $email;
    $homeoption = $homeoption;
  
       
    $sql= "SELECT * FROM regtable WHERE email = '$email'";//we would select from register table where there is a particular email
    $result = mysqli_query($connection, $sql);
    
    if(mysqli_num_rows($result) ==0){//if result is equal to zero that means record with the email dosen't exist so we would have to insert into the table.
        if($picture_hidden_tag == "T" || $document_hidden_tag == "T"){ //picture or file is added into the input button.
            $sql = "INSERT INTO regtable SET first_name = '$firstname', email = '$email', home_option = '$homeoption', reg_password = '$password' , other_name = '$othername', users_name = '$username'";
            $result = mysqli_query($connection, $sql); 
            if($result == true){
                $sql = "SELECT form_id  FROM regtable WHERE email='$email'";
                $result = mysqli_query($connection, $sql) or die(mysql_error());
                $row = mysqli_fetch_assoc($result);  
                $form_id = $row['form_id'];
                
                $i = 0;
                while($i < count($_FILES["files"]["name"])){
                    // $filenamex .= $_FILES['files']['name'][$i].",";
            
                    if($_FILES['files']['name'][$i] == ""){
                        //Do nothing because image is not selected
                    }else{
                        if($i == 0){//for image
                            $CountArray = count(explode(".",$_FILES["files"]["name"][$i]));
                            $filename = $_FILES['files']['name'][$i]; //gets the file name
                            $filename = trim($filename);
                            $fileNameParts   = explode(".",$filename); // explode file name to two parts
                            $fileExtension   = end($fileNameParts); // give extension
                            $fileExtension   = strtolower($fileExtension); // convert to lower case
                            $fileType = pathinfo($filename,PATHINFO_EXTENSION);
                            if ($CountArray>=2){
                                if($fileType == 'jpg' || $fileType == 'jpeg'){
                                $upload_dir = 'image';
                                $sql = "UPDATE regtable SET image_tag ='T' WHERE email ='$email'";
                                mysqli_query($connection, $sql);
                                $filename = $form_id.'.jpg';

                                }else{
                                    echo -1;
                                }
                                if(is_dir($upload_dir)){
                                    //Directory already exist
                                }else{//create the directory
                                    mkdir($upload_dir);
                                }
                
                                $targetFile  = $upload_dir.'/'.$filename;
                
                                if(file_exists($targetFile))
                                {
                                    unlink($targetFile);//unlink php function deletes the file
                                }
                
                                if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile))//uploads the file in the directory
                                {
                                    echo 1;
                                }else{
                                    echo -2;
                                }
            
            
                            }else{
                                // you have not selected any file for upload
                            }
                        }else{//for document
                            $CountArray       = count(explode(".",$_FILES["files"]["name"][$i]));
                            $filename        = $_FILES['files']['name'][$i]; //gets the file name
                            $filename        = trim($filename);
                            $fileNameParts   = explode(".",$filename); // explode file name to two parts
                            $fileExtension   = end($fileNameParts); // give extension
                            $fileExtension   = strtolower($fileExtension); // convert to lower case
                            $fileType = pathinfo($filename,PATHINFO_EXTENSION);
                            if ($CountArray>=2){
            
                                if($fileType == 'docx' || $fileType == 'pdf'){
                                    $upload_dir = 'document';
    
                                    $sql = "UPDATE regtable SET document_tag ='T' WHERE email ='$email'";
                                    mysqli_query($connection, $sql);
                                    $filename = $form_id.'.pdf';
    
                                    }else{
                                        echo -1;
                                    }
                                
                                if(is_dir($upload_dir)){
                                    //Directory already exist
                                }else{//create the directory
                                    mkdir($upload_dir);
                                }
                
                                $targetFile  = $upload_dir.'/'.$filename;
                
                                if(file_exists($targetFile))
                                {
                                    unlink($targetFile);//unlink php function deletes the file
                                }
                
                                if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile))//uploads the file in the directory
                                {
                                    echo 1;
                                }else{
                                    echo -2;
                                }
            
                            }
                        }							
                    }
                    $i++;
                }
            }else{
                $result = -1;//-1 is unable to update record
            }             
        }else{
            $sql = "INSERT INTO regtable SET first_name = '$firstname', email = '$email', home_option = '$homeoption', reg_password = '$password', other_name = '$othername', users_name = '$username'";
            $result = mysqli_query($connection, $sql);///we would then create a record into the database
            if($result==true){
                echo 11;
            }else{
                echo -1;
            }
        }
    }else{
        echo 0;
    }
           


?>