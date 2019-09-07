<?php include('koneksi.php');

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $work = $_POST['work'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO nama (nama, id_work, id_salary) VALUES ('$nama', '$work', '$salary')";
    $sql = mysqli_query($db, $query);

    if ($sql) {
        header('Location: index.php?status=1');
    } else {
        //header('Location: index.php?status=0');       
    }
    
} else {
    header('Location: index.php?status=3');
}

?>