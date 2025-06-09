<?php

$conn = mysqli_connect("localhost", "root", "", "auth_db");

if(!$conn){
    die("Connection Failed " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']== 'POST'){

    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);
    $number = htmlspecialchars(trim($_POST['number']));
    $message = htmlspecialchars(trim($_POST['message']));


    if(!empty($name) && !empty($email) && !empty($password) && !empty($number) ){


        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Invalid Email";
            exit;
        }
         
        $hashpassword = password_hash($password , PASSWORD_BCRYPT);

        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn , $email);
        $number = mysqli_real_escape_string($conn , $email);
        $message = mysqli_real_escape_string($conn , $message);



        $sql = "INSERT INTO users(name,email,password,number,message) VALUES ('$name', '$email', '$hashpassword' , '$number' , '$message')" ;


        if(mysqli_query($conn , $sql)){
             header("Location: login.php");
                exit();
        }

        else{
            echo "Database error: " . mysqli_error($conn);
        }


    }
    else {
        echo "All required fields must be filled.";
    }

}
mysqli_close($conn);

?>