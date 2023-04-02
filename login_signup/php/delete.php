<?php

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
if (
    isset($_POST['ans'])
) {


    include "../db_conn.php";



    $status = $_POST['ans'];
 
    $id1=$_SESSION['id'];
    if (empty($status)) {
        $em = "Select ans";
        header("Location: ../delete.php?error=$em&$data");
        exit;
    }else {

        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_SESSION['id']]);


        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
  
            $emaildb =  $user['email'];
            $password =  $user['password'];
            $fname =  $user['fname'];
            $lname =  $user['lname'];
            $id =  $user['id'];
               if($_SESSION['id'] === $id){
        if($status==='Y'){     
        $sql = "DELETE FROM users WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id1]);
                
                   header("Location: ../login.php");
                   exit;}
               }
  
            
  
        }






    }
} else {
    header("Location: ../home.php?error=error");
    exit;
}
}