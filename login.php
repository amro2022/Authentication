<?php

$title = "Login";

include './inc/header.php';

    if(isset($_SESSION['user'])){
        redirect('home.php');
    }
include './inc/nav.php';
include './core/function.php';

?>

<div class="container">
    <div class="row justify-content-center border align-items-center g-2 p-2 my-5">
        <h2 class="col text-center" style = "color:blue">Login</h2>

        <form action="./handelres\handelLogin.php" method = "POST">
            
        <?php
            if(isset($_SESSION['errors'])):
                foreach($_SESSION['errors'] as $error):?>
                    <div class="alert alert-danger p-1">
                        <?= $error; ?>
                    </div>
        <?php   endforeach; 
                unset($_SESSION['errors']);
            endif;    
        ?>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" >
            </div>

            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" >
            </div>
            <div class="mb-3">
            <input type="submit" value = "Login"class="form-control btn btn-primary"></input>
            </div>
        </form>
    </div>
</div>

<?php include './inc/footer.php';?>