<?php


function getCategory($conn, $item_id){
    $sql = "SELECT DISTINCT c.category_desc as category_desc
              FROM `items` i
              join `category` c
                ON (i.item_category_id = c.cat_id)
              WHERE i.item_id = ? ;";
    $stmt=mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        return false;
        exit();
    }
        mysqli_stmt_bind_param($stmt, "s" ,$item_id );
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        $arr = array();            //initialize an empty array
        if($row = mysqli_fetch_assoc($resultData)){
            return $row['category_desc'];            
        }
        else {
            return false;
        }             
        mysqli_stmt_close($stmt);  //close the mysqli_statement
}

function getAll($conn, $table){
    $sql = "SELECT * FROM {$table};";
    $stmt=mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        return false;
        exit();
    }
    
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        $arr = array();            //initialize an empty array
        while($row = mysqli_fetch_assoc($resultData)){
            array_push($arr,$row);            
        }
        return $arr;               //this is the return value
        mysqli_stmt_close($stmt);  //close the mysqli_statement
}

function getItem($conn, $table, $column, $value){
    $sql = "SELECT * FROM {$table} WHERE `{$column}` = '{$value}';";
    $stmt=mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        return false;
        exit();
    }
    
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        $arr = array();            //initialize an empty array
        while($row = mysqli_fetch_assoc($resultData)){
            array_push($arr,$row);            
        }
        return $arr;               //this is the return value
        mysqli_stmt_close($stmt);  //close the mysqli_statement
    
} 

function createUser($conn, $username, $password, $firstname, $lastname, $address, $user_contact){

        $err;
        $sql = "INSERT INTO users (username, password, firstname, lastname, address, user_contact) VALUES (?,?,?,?,?,?);";

        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            return false;
            exit();
        }
            mysqli_stmt_bind_param($stmt, "ssssss", $username, $password, $firstname, $lastname, $address, $user_contact);
            mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
            return true;
           
}

function uidExists($conn, $username, $password){
            $err;
            $sql = "SELECT * FROM users WHERE username = ? AND password = ? ;"; 
            $stmt = mysqli_stmt_init($conn);

            if (!mysql_stmt_prepare($stmt, $sql)){
                header("location: includes/login.php?error=stmtfailed");
                exit(); 
            }

            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);

            $resultData = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($resultData)){
                return $row;
            }
            else{
                $err = false;
            return $err;
            }
            mysqli_stmt_close($stmt);
} 

function uidExit(){
    include 'db_conn.php';
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");

}