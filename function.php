<?php
function db_connect(){
    global $link;
    $link = mysqli_connect('localhost', 'root', '', 'contact');
    return $link;
}

function db_disconnect(){
    global $link;
    mysqli_close($link);
}

function add_contact($name,$phone){
    global $link;
    db_connect();
    $query = "INSERT INTO contact(c_name,c_phone) VALUES('$name','$phone')";
    $q = mysqli_query($link,$query);
    db_disconnect();
    return $q;
}

function view_all_contact(){
    global $link;
    db_connect();
    $query = "SELECT * FROM contact";
    $q = mysqli_query($link,$query);
    db_disconnect();  
    if($q){
        $data = mysqli_fetch_all($q,MYSQLI_ASSOC);
    }  
    return $data;
}

function viewSignleContact($cid){
    global $link;
    db_connect();
    $query = "SELECT * FROM contact WHERE c_id='$cid'" ;
    $q = mysqli_query($link,$query);
    db_disconnect();
    if($q){
        $data = mysqli_fetch_assoc($q);
    }
    return $data;
}

function update_contact($name,$phone,$cid){
    global $link;
    db_connect();
    $query = "UPDATE contact SET c_name='$name',c_phone='$phone' WHERE c_id='$cid'";
    $q = mysqli_query($link,$query);
    db_disconnect();
    return $q;
}

function delete_single_contact($cid){
    global $link;
    db_connect();
    $query = "DELETE FROM contact WHERE c_id='$cid'";
    $q = mysqli_query($link,$query);
    db_disconnect(); 
    return $q;
}

?>