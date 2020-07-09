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

<h2>Add Contact</h2>

<form action="" method="post">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <input type="submit" value="Submit">
</form>