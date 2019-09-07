<?php
include('koneksi.php');

$userid = $_POST['userid'];

$sql = "DELETE FROM nama WHERE id=$userid";
$query = mysqli_query($db, $sql);

$response = '<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="location.reload();">
                <span aria-hidden="true" style="color:red;">&times;</span>
            </button><br><br>';
if ($query) {
    $response .= '<i class="fas fa-check-circle" style="font-size:75pt; color:turquoise"></i><br><br>';
    $response .= '<h3>Data Berhasil Dihapus</h3><br>';
} else {
    $response .= '<i class="fas fa-check-circle" style="font-size:75pt; color:red"></i><br><br>';
    $response .= '<h3>Data Gagal Dihapus</h3><br>';    
}

echo $response;
exit;
?>