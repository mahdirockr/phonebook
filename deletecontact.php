<?php include_once 'function.php'; ?>


<?php 
    if(!empty($_GET)){
        $cid = $_GET['id'];
        $q = delete_single_contact($cid);
        if($q){
            header('location:index.php');
        }else{
            echo "Failed";
        }        
    }
?>