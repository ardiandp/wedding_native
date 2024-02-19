<?php
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $text1= $_POST['text1'];
    $waktu=$_POST['waktu'];
    $sql = "UPDATE setting SET title = '$title',text1='$text1',waktu='$waktu' ";
    $update = $conn->query($sql);

    echo "<script>window.location='?page=setting';</script>";
}

elseif(isset($_POST['updatecalon'])){
    $c_suami = $_POST['c_suami'];
    $c_istri = $_POST['c_istri'];
    $sql = "UPDATE setting SET c_suami = '$c_suami', c_istri = '$c_istri'";
    $update = $conn->query($sql);

    echo "<script>window.location='?page=setting';</script>";
}
