<?php 
    unlink('data/'.$_POST['id']);
    header('Location: /Ch06/index.php');
?>