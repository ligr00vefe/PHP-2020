<?php
    // reqiure로 함수 정의가 중복될 경우 에러발생
    // require_once로 함수를 정의하면 
    // 다른 페이지에서 같은 함수를 다시 정의하는 경우 에러가 발생하지 않고
    // require를 통해 요청된 파일은 무시한다.
    require_once('view/top.php');
?>

<a href="create.php">create</a>
<?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?= $_GET['id'] ?>">update</a>
    <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="submit" value="delete">
    </form>
<?php } ?>

<h2>
    <?php
        print_title();            
    ?>
</h2>

<?php
    print_description();  
?>   

<?php
    require_once('view/bottom.php');
?>
