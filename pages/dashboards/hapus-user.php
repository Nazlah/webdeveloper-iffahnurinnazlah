<?php require_once '../../action/connection.php';?>

<?php 

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
}else{echo "id tidak ditemukan";}

// hapus data
$query = "DELETE FROM tb_user WHERE id_user = '{$id}'";
$delete = mysqli_query($db,$query);

if ($delete == false) {
    ?>
    <script type='text/javascript'>
        alert('Gagal Menghapus Data');
        window.location.href="../tables/data-user.php";
    </script>
    <?php
}
else{
    ?>
    <script type='text/javascript'>
        alert('Sukses Menghapus Data');
        window.location.href="../tables/data-user.php";
    </script>
    <?php
}


?>