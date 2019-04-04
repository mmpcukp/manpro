
<footer>
<?php
    include_once 'dbh.inc.php';
    $get_footer = 'SELECT * FROM t_config WHERE config_id="4";';
    $res_footer = mysqli_fetch_assoc(mysqli_query($conn,$get_footer));
    echo (html_entity_decode(htmlspecialchars_decode( $res_footer['config_value'])));
?>
</footer>

