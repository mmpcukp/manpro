<?php
    include_once 'includes/dbh.inc.php';
    $cek_mtc = 'SELECT config_value FROM t_config WHERE config_id=1;';
    $cek_mtc_r = mysqli_fetch_assoc(mysqli_query($conn,$cek_mtc))['config_value'];
    if($cek_mtc_r==0){
        header('Location: /manpro/index.php');
    }
?>
<h1>Maaf Kami Sedang Melakukan Perbaikan</h1>

