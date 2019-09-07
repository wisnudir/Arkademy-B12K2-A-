<?php
include ('koneksi.php');

$userid = $_POST['userid'];

$sql = "SELECT * FROM nama WHERE id=".$userid;
$query = mysqli_query($db, $sql);

$response = '<form action="proses_edit_data.php" method="post">
                <fieldset class="form-group">';
while ($row = mysqli_fetch_array($query)) {
    $id = $row['id'];
    $nama = $row['nama'];
    
    if ($row['id_work'] == 1) {
        $work1 = "selected" ;
        $work2 = "";
    } elseif ($row['id_work'] == 2) {
        $work1 = "" ;
        $work2 = "selected";
    }
    
    if ($row['id_salary'] == 1) {
        $salary1 = "selected" ;
        $salary2 = "";
    } elseif ($row['id_salary'] == 2) {
        $salary1 = "" ;
        $salary2 = "selected";
    }

    $response .= '<input type="hidden" name="id" value="'.$id.'">';
    $response .= '<input type="text" name="nama" value="'.$nama.'" placeholder="Name .." class="form-control"><br>';
    $response .= '<select name="work"class="form-control">
    <option value="" disabled selected hidden>Work ...</option>
    <option value=1 '.$work1.'>Frontend Dev</option>
    <option value=2 '.$work2.'>Backend Dev</option>
    </select><br>';
    $response .= '<select name="salary" class="form-control">
    <option value="" disabled selected hidden>Salary ...</option>
    <option value=1 '.$salary1.'>10.000.000</option>
    <option value=2 '.$salary2.'>12.000.000</option>
    </select><br>';
}
$response .= '<input type="submit" name="edit" value="EDIT"  class="btn btn-sm btn-warning float-right shadow-sm pl-4 pr-4 mb-3 rounded" style="color:white;">
</fieldset>
</form>';
echo $response;
exit;
?>