<?php 
include_once 'inc/header.php';
include_once 'function.php';

if(!empty($_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $res = add_contact($name,$phone);
    if($res){
        header('location:index.php');
    }else{
        echo "Failed";
    }
}

?>

<h1>Add Contact</h1>

<form action="" method="post">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <input type="submit" value="Submit">
</form>