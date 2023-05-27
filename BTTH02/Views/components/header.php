<header class="bg-dark d-flex justify-content-center py-3 mb-3">
    <ul class="nav nav-pills gap-5">
        <li class="nav-item "><a href="index.php" class="btn text-light fw-bold" aria-current="page">Home</a></li>
        <?php
        if(!isset($_SESSION['user_id'])){
        ?>
        <li class="nav-item ">
            <a href="login.php" type="submit" class="btn text-light fw-bold">Login</a>
            <?php }
            else{
                ?>
                <a href="logout.php" type="submit" class="btn text-light fw-bold" onclick="return confirm('Do you want to sign out?')">Logout</a>
            <?php }?>

    </ul>
</header>