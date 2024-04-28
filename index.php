<?php
    //Newsletter Email
    

    //database connection
    $dsn="mysql:host=localhost;dbname=LanguSage";
    $dbusername="root";
    $dbpassword="";

    

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email= $_POST['email'];

        //Contact form information
        $name= $_POST['name'];

        $form_email= $_POST ['form_email'];

        $reason= $_POST ['reason'];

        $message= $_POST ['message'];
        
        try{
            $pdo = new PDO($dsn, $dbusername, $dbpassword);
            $pdo  -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query= "INSERT INTO Form(email, name, form_email, reason, message) 
            VALUES ($email, $name, $form_email, $reason, $message)";

            $stmt= $pdo -> prepare ($query);

            $stmt-> execute([$email, $name, $form_email, $reason, $message]);

            $pdo = null;
            $stmt = null;

            header("Location:../LanguSage.php");
            
            die();

        } catch(PDOException $e) {
            echo "Connection Failed:" .$e ->getMessage();
        }
    }
    else{
        header("Location:../LanguSage.php");
    }
