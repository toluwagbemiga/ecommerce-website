<?php
    include '../core/connect.php';


    if(isset($_POST['login'])){
        $username = htmlentities($_POST['username']);    
        $password = htmlentities($_POST['password']);

        $sql = "SELECT * FROM `users` WHERE `username` LIKE '$username' AND `password` LIKE '$password'; ";
        $query = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($query);

        if ($num !== 0) {
            session_start();
            $row = mysqli_fetch_array($query);
                $id = $row['user_id'];
                $type = $row['usertype'];
                $_SESSION['uid'] = $id;

            if($username == 'admin' && $password == 'administrator'){
                header("Location: ../admin/index.php");
            }elseif($type == 'shipper'){
                header("Location: ../shipper/index.php");
            }else{
                header("Location: ../customer.php");
            }
            
        }else{
            header("Location: ../login.php?=login_failed");

        }
}
				