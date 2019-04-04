<?php   
    function getUserIp(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){$ip = $_SERVER['HTTP_CLIENT_IP'];}
        elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
        else{$ip = $_SERVER['REMOTE_ADDR'];}
        return $ip;
    }
    include_once 'dbh.inc.php';
    session_start();
    $visit = 'INSERT INTO t_visitors(visitors_ip) VALUES ("'.getUserIp().'");';
    mysqli_query($conn,$visit);
?>
<!-- BOOTSTRAP 4 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #c4c4c4;
   color: white;
   text-align: center;
}
</style>
<nav>


</nav>