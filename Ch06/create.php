<?php
    require('view/top.php');
?>

<a href="create.php">create</a>
<?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?php echo $_GET['id'] ?>">update</a>
<?php } ?>

<form action="create_process.php" method="post">
    <p>
        <input type="text" name="title" placeholder="title을 입력해 주세요.">
    </p>
    <p>
        <textarea name="description"></textarea>
    </p>
    <p>
        <input type="submit">
    </p>
</form>


<h2>
    <?php
        print_title();            
    ?>
</h2>

<?php
    print_description();  
?>   

<?php
    require('view/bottom.php');
?>