<?php
        include 'core/connect.php';
        session_start();
        $cust_id = $_SESSION['uid'];


        if(isset($_GET['addcart'])){
                $item_id = htmlentities($_GET['item_id']);
                $item_qty = htmlentities($_GET['item_qty']);
                $sql_ins = "INSERT INTO `cart`
                          (`cart_id`, `item_id`, `user_id`, `qty`)
                           VALUES (NULL,'$item_id', '$cust_id', '$item_qty') ;";
                if(mysqli_query($conn, $sql_ins)){
                        header("Location: cart.php?=success");
                }else{
                        header("Location: customer.php?=failed");
                }

        }

        