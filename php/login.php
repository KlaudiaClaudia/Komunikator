<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Dostępny";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "Udało się";
                }else{
                    echo "Upss, coś poszło nie tak. Spróbuj ponownie!";
                }
            }else{
                echo "Email lub hasło są nie prawidłowe!";
            }
        }else{
            echo "$email - Ten email nie istnieję!";
        }
    }else{
        echo "Wszystkie pola są wymagane!";
    }
?>