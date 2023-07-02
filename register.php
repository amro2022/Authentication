<?php
$title = "Register";

include './inc/header.php';
include './core/function.php';

    if(isset($_SESSION['user'])){
        redirect('home.php');
    }

include './inc/nav.php';
?>

<div class="container">
    <div class="row justify-content-center border align-items-center g-2 p-4 my-5">
        <h2 class="col text-center"style="color:green">Register</h2>

        <form action ="handelRegister.php" method = "POST">
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
            <label for="name" class="form-label">Name</label>
            <input type="text"class="form-control" name="name" >
            </div>

            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" >
            </div>

            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" >
            </div>

            <div class="mb-3">
            <label for="password" class="form-label">Re-Password</label>
            <input type="password" class="form-control" name="password2" >
            </div>
            <div class="mb-3">
            <input type="submit"value = "Register"class="form-control btn btn-success"></input>
            </div>
        </form>
    </div>
</div>

<?php include './inc/footer.php';?>