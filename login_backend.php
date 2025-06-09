<?php

session_start();

$conn = mysqli_connect("localhost", "root" , "" , "auth_db");

if(!$conn){
    die("Connection Failed " . mysqli_connect_error());

}

if($_SERVER['REQUEST_METHOD']=="POST"){


    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    if(!empty($email) && !empty($password)){

        if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
            echo "Invalid Email" ;
            exit;
        }

        $email = mysqli_real_escape_string($conn , $email);

        $sql = "SELECT * FROM users WHERE email = '$email'";

        $result = mysqli_query($conn , $sql);

        if($result && mysqli_num_rows($result) === 1){
            $data = mysqli_fetch_assoc($result);
            $hashpassword = $data['password'];

            if(password_verify($password , $hashpassword)){
               
                $_SESSION['user_id']= $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['number']  = $data['number'];
                $_SESSION['message'] = $data['message'];
                 header("Location: dashboard.php");
                exit();
            } 
             else {
                echo " Incorrect password.";
            }

        }
         else {
            echo " User not found with this email.";
        }



    }
    else {
        echo " All fields are required.";
    }


}

mysqli_close($conn);

?>