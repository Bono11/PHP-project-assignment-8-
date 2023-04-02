<?php

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
if (
    isset($_POST['fname']) &&
    isset($_POST['lname'])
) {


    include "../db_conn.php";



    $fname1 = $_POST['fname'];
    $lname1 = $_POST['lname'];
    $password1=$_POST['password'];
    $id1=$_SESSION['id'];
    if (empty($fname1)) {
        $em = "Give new first name";
        header("Location: ../update.php?error=$em&$data");
        exit;
    }  else if (empty($lname1)) {
        $em = "Give new last name";
        header("Location: ../update.php?error=$em&$data");
        exit;
    } else {

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
                
        $sql = "UPDATE users SET fname=?, lname=?, password=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname1, $lname1,$password1, $id1]);
                
                   header("Location: ../updatesuccess.php");
                   exit;
                echo "Logged in";
               }
  
            
  
        }






    }
} else {
    header("Location: ../update.php?error=error");
    exit;
}
}