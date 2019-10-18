<?php 
include_once 'inc/header.php';
include_once 'function.php';

if(!empty($_GET)){
  $cid = $_GET['id'];
  $data = viewSignleContact($cid);
}

if(!empty($_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $res = update_contact($name,$phone,$cid);
    if($res){
        header('location:index.php');
    }else{
        echo "Failed";
    }
}

?>

<h1>Edit Contact</h1>

<form action="" method="post">
    <input type="text" name="name" placeholder="<?php echo $data['c_name'] ?>"><br><br>
    <input type="text" name="phone" placeholder="<?php echo $data['c_phone'] ?>"><br><br>
    <input type="submit" value="Update Contact">
</form>