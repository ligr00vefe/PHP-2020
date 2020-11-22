<?php 
    unlink('data/'.$_POST['id']);
    header('Location: /Ch04/index.php');
?>