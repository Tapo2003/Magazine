<?php

    require_once('dbconn.php');
    extract($_POST);
    $authorid = trim($authorid);
    
    $sql = "SELECT * FROM author WHERE authorid = '$authorid'";
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count == 1){
        // $recordcount = 0; $tablerow = '';
        $row = mysqli_fetch_assoc($result);
        $myArray = [
            'authorid' => $row['authorid'],
            // 'Fullname' => $row['Fullname'],
             'authorname' => $row['authorname'],
             'authorinfo' => $row['authorinfo'],
             'phone' => $row['phone'],
             'email' => $row['email'],
           
        ];
    }else{
        $myArray = 0; 
    }
    echo json_encode($myArray);
        
?>




	