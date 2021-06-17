<?php
    $mat_no = $_POST['mat_no'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $level = $_POST['level'];
    $sex = $_POST['sex'];

     $conn = new mysqli('localhost', 'root', '', 'trial');
     if ($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
     }else{
         $stmt = $conn->prepare("insert into students(mat_no, first_name, last_name, email, phone_number, level, sex) values(?,?,?,?,?,?,?)"); 
         $stmt->bind_param("ssssiis", $mat_no, $first_name, $last_name, $email, $phone_number, $level, $sex);
         $stmt->execute();
         echo 'YOU HAVE SUCCESSFULLY REGISTERED '. $first_name . ' AS A STUDENT, Go back and Refresh to view Students List View Student List';
        $conn->close();
        $stmt->close();
     }
?>