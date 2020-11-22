<?php 
    unlink('data/'.$_POST['id']);
    header('Location: /Ch05/index.php');
?>