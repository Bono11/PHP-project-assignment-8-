<?php

session_start();

if (
    isset($_POST['email']) &&
    isset($_POST['pass1'])
) {


    include "../db_conn.php";



    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    if (empty($email)) {
        $em = "Email is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    }  else if (empty($pass1)) {
        $em = "Password is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else {

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);


        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
  
            $emaildb =  $user['email'];
            $password =  $user['password'];
            $fname =  $user['fname'];
            $lname =  $user['lname'];
            $id =  $user['id'];
            if($email === $emaildb){
               if($pass1 === $password){
                   $_SESSION['id'] = $id;
                   $_SESSION['fname'] = $fname;
                   $_SESSION['lname'] = $lname;
  
                   header("Location: ../home.php");
                   exit;
                echo "Logged in";
               }else {

                 $em = "Incorect Email or password 1";
                 header("Location: ../login.php?error=$em&$data");
                 exit;
              }
  
            }else {
              $em = "Incorect Email or password 2";
              header("Location: ../login.php?error=$em&$data");
              exit;
           }
  
        }else {
           $em = "Incorect Email or password 3";
           header("Location: ../login.php?error=$em&$data");
           exit;
        }






    }
} else {
    header("Location: ../login.php?error=error");
    exit;
}
