<?php
        include 'core/connect.php';
        session_start();
        $cust_id = $_SESSION['uid'];

        if(isset($_GET['checkout'])){
                $item = $_GET['item_id'];
                $qty = $_GET['qty'];
                $price = $_GET['price'];
                $total = $price*$qty;

                function getRandom($length){
        
                        $str = 'abcdefghijklmnopqrstuvwzyz';
                        $str1= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $str2= '0123456789';
                        $shuffled = str_shuffle($str);
                        $shuffled1 = str_shuffle($str1);
                        $shuffled2 = str_shuffle($str2);
                        $total = $shuffled.$shuffled1.$shuffled2;
                        $shuffled3 = str_shuffle($total);
                        $result= substr($shuffled3, 0, $length);

                        return $result; 
                }
                $num = getRandom(9);

                $sql = "INSERT INTO `orders` (`order_id`, `order_cust_id`, `order_item_id`, `order_quantity`, `order_total_amt`, `ordertrack_num`) VALUES (NULL, '$cust_id', '$item', '$qty', '$total', '$num');";
                
                if(mysqli_query($conn, $sql)){
                        
                        header("Location: checkout.php?=order_success");
                }else{
                        header("Location: cart.php?=failed");
                }


        }

?>