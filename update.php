<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hour = $_POST['hour'];
    $aksi = $_POST['aksi'];
  
    $sql = "UPDATE subjects SET subject = '$subject', hour = '$hour' aksi = '$aksi'WHERE id = '$id'"; //"UPDATE subjects SET subjects='$subjects', hour='$hour', aksi='$aksi' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=subjects&s=view');
    } else {
        include "index.php?m=subjects&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}
