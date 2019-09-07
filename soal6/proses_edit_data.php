<?php
include ('koneksi.php');

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $id_work = $_POST['work'];
    $id_salary = $_POST['salary'];

    $sql = "UPDATE nama SET nama='$nama', id_work='$id_work', id_salary='$id_salary' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?es=1');
    } else {
        header('Location: index.php?es=2');
    }
    
} else {
    header('Location: index.php?es=0');
}

?>