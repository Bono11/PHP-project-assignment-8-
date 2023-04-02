<?php 

function isPasswordStrong($password) {
    // Minimum password length
    $min_length = 8;

        if (strlen($password) >= $min_length) {
            return false; // Password is strong
        }
    return true; // Password is weak
}

if(isset($_POST['fname']) && 
   isset($_POST['lname']) &&
   isset($_POST['email']) &&
   isset($_POST['pass1']) &&       
   isset($_POST['pass2'])){

    
    include "../db_conn.php";

    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if (empty($fname)) {
    	$em = "First name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($lname)){
    	$em = "Last name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($pass1)){
    	$em = "Password is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($pass2)){
    	$em = "Re-enter password";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($email)){
    	$em = "Email is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if($pass1!=$pass2){
    	$em = "Passwords not matching";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(isPasswordStrong($pass1)){
    	$em = "Password is not strong";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }
    else
    {
        
    	$sql = "INSERT INTO users(fname, lname, email, password) 
    	        VALUES(?,?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$fname, $lname, $email, $pass1]);
    }
}else {
	header("Location: ../index.php?error=error");
	exit;
}