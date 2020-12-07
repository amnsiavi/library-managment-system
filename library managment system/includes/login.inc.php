<?php

require 'dbh.inc.php';

if(isset($_POST['submit'])){
    $userName = mysqli_real_escape_string($con, $_POST['userName']);
    $password = mysqli_real_escape_string($con, $_POST['pwd']);
    
    $uName = "";
    $pass = "";

    $sql = "SELECT * FROM users WHERE email='$userName';";

    $result = mysqli_query($con, $sql);

    $rowCheck = mysqli_num_rows($result);

    if($rowCheck > 0){
        $rows = mysqli_fetch_assoc($result);
        $uName = $rows['email'];
        $pass = $rows['user_pass'];
        
        $passCheck = password_verify($password, $pass);
        
        if($uName == $userName){
            session_start();
            $_SESSION['user'] = $uName;
            header("Location: ../index.html?sucess= login sucessful");
            exit();
        }
        else{
             header("Location: ../login.html?fft=login failed invalid password or invalid userName");
             exit(0);
        }
       
    
      }else{
         header("Location: ../login.html?sr=login failed user doesno exsist");
         exit(0);
 }

    
}else{
    header("Location: ../login.html?error=login failed submission failed");
    exit(0);
}