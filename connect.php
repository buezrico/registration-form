<?php
    $mat_no = $_POST['mat_no'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $level = $_POST['level'];
    $sex = $_POST['sex'];

     $conn = new mysqli('localhost', 'root', '', 'trial');
     if ($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
     }else{
         $stmt = $conn->prepare("insert into students(mat_no, full_name, email, phone_number, level, sex) values(?,?,?,?,?,?)"); 
         $stmt->bind_param("sssiis",$mat_no, $full_name, $email, $phone_number, $level, $sex);
         $stmt->execute();
         echo ('You have successfully registered '.$full_name.' as a student.');
         $stmt->close();
         $conn->close();
     }
?>