<?php
    include_once 'includes/header.inc.php';
    $cek_mtc   = 'SELECT config_value FROM t_config WHERE config_id=1;';
    $cek_mtc_r = mysqli_fetch_assoc(mysqli_query($conn,$cek_mtc))['config_value'];
    if($cek_mtc_r==1){
        header('Location: /manpro/maintenance.php');
    }
?>
<!--Main OBJECT-->
<h1 style="text-align: center">
    <?php
        $main_txt   = 'SELECT config_value FROM t_config WHERE config_id=2;';
        $main_txt_r = mysqli_fetch_assoc(mysqli_query($conn,$main_txt))['config_value'];
        echo $main_txt_r;
    ?>
</h1>
<a href="play.php">
<?php
    $main_img   = 'SELECT config_value FROM t_config WHERE config_id=3;';
    $main_img_r = mysqli_fetch_assoc(mysqli_query($conn,$main_img))['config_value'];
    echo '<img width="100%" height="50%" src="'.$main_img_r.'">';
?>
</a>
<!--End Of Main OBJECT-->

<?php
    include_once 'includes/footer.inc.php';
?>