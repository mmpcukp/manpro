<?php
    include_once 'includes/header.inc.php';
    $cek_mtc   = 'SELECT config_value FROM t_config WHERE config_id=1;';
    $cek_mtc_r = mysqli_fetch_assoc(mysqli_query($conn,$cek_mtc))['config_value'];
    if($cek_mtc_r==1){
        header('Location: /manpro/maintenance.php');
    }
?>


<?php
    include_once 'includes/footer.inc.php';
?>