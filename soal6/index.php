<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.css"  type='text/css'>
    <link rel="stylesheet" href="asset/fontawesome/css/all.css">
    <title>Arkademy Test No 6</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-fixed-top shadow-sm p-3 mb-5 bg-white rounded">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="asset/larkademy.png" height="30" class="d-inline-block align-top" >
            ARKADEMY BOOTCAMP
            </a>
        </div>
    </nav>

    <div class="container">
        <button class="btn btn-sm btn-warning float-right shadow-sm pl-4 pr-4 mb-3 rounded" style="color:white;" data-toggle="modal" data-target="#tambahDataModal" type="button">ADD</button>
        <table class="table table-bordered text-center">
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Work</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT nama.id as id,nama.nama as name, nama.id_work as id_work, nama.id_salary as id_salary, work.name as workname,kategori.salary as salary FROM nama JOIN work ON nama.id_work = work.id JOIN kategori ON nama.id_salary = kategori.id";
                    $sql = mysqli_query($db, $query);

                    while ($data = mysqli_fetch_array($sql)) {
                        echo '<tr>';
                        echo '<td>'.$data['name'].'</td>';
                        echo '<td>'.$data['workname'].'</td>';
                        echo '<td>'.$data['salary'].'</td>';
                        echo '<td>
                        <button id="butdel_'.$data['id'].'" class="userdel btn">
                            <i class="far fa-trash-alt" style="color:red;"></i>
                        </button> 
                        <button id="butedit_'.$data['id'].'" class="useredit btn">
                            <i class="far fa-edit" style="color:teal;"></i>
                        </button>';
                        echo '</td><tr>';
                    }
                ?>
            </tbody>
        </table>   
    </div>
    <!-- Modal EDIT DATA-->
        <div class="modal" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="editDataModalJudul" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">EDIT DATA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:red;">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-body-edit"> 
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal ADD DATA-->
    <div class="modal" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalJudul" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ADD DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:red;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="proses_add_data.php" method="post">
                        <fieldset class="form-group">                    
                            <input type="text" name="nama" placeholder="Name .." class="form-control"><br>
                            <select name="work"class="form-control">
                                <option value="" disabled selected hidden>Work ...</option>
                                <option value=1>Frontend Dev</option>
                                <option value=2>Backend Dev</option>
                            </select><br>
                            <select name="salary" placeholder="Salary.." class="form-control">
                                <option value="" disabled selected hidden>Salary ...</option>
                                <option value=1>10.000.000</option>
                                <option value=2>12.000.000</option>
                            </select><br>
                </div>
                <div class="modal-footer">
                <input type="submit" name="tambah" value="ADD"  class="btn btn-sm btn-warning float-right shadow-sm pl-4 pr-4 mb-3 rounded" style="color:white;">
                </fieldset>
                </form>
                </div>
            </div>
        </div>
    </div>
    
   

    <!-- Modal HAPUS DATA-->
    <div class="modal" id="hapusDataModal" tabindex="-1" role="dialog" aria-labelledby="hapusDataModalJudul" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-body text-center modal-body-hapus">                    
                    
                </div>
            </div>
        </div>
    </div>

    <footer>
        <script type="text/javascript" src="asset/js/jquery.min.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.js"></script>
        <script>
        $(document).ready(function() {
            $('.useredit').click(function() {
                var id = this.id;
                var splitid = id.split('_');
                var userid = splitid[1];

                $.ajax({
                    url: 'ajax_edit_data.php',
                    type: 'post',
                    data: {userid: userid},
                    success: function(response) {
                        $('.modal-body-edit').html(response);
                        $('#editDataModal').modal('show');
                    }
                });
            });

            $('.userdel').click(function() {
                var id = this.id;
                var splitid = id.split('_');
                var userid = splitid[1];

                $.ajax({
                    url: 'ajax_del_data.php',
                    type: 'post',
                    data: {userid: userid},
                    success: function(response) {
                        $('.modal-body-hapus').html(response);
                        $('#hapusDataModal').modal('show');
                    }
                });
            });
        });
        </script>
    </footer> 
</body>
</html>