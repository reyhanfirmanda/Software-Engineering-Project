<?php

// include database configuration file
include 'dbConfig.php';

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToProducts'){

        

        // $foto = $_FILES['foto']['name'];
        // $tmp = $_FILES['foto']['tmp_name'];

        // $fotobaru = date('dmYHis').$foto;

        // get product details
        // $query = $db->query("SELECT * FROM products WHERE id = ".$productID);
        // $row = $query->fetch_assoc();
        extract($_POST);
        $query = $db->query("INSERT INTO `products` (`images`, `name`, `description`, `price`, `created`, `modified`) VALUES 
        ('".$images."', '".$name."', '".$description."',".$price.", '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."');");
        header("Location: admin.php");
    }
    }else{
        header("Location: home.php");
    }
