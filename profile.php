<?php

$title = "Profile";

include './inc/header.php';
include './core/function.php';

    if(!isset($_SESSION['user'])){
        redirect('login.php');
        die;
    }

include './inc/nav.php';

?>

<h1 class = "text-center"> Profile Page</h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto my-5 border p-2">
                <h3 class="text-center border my-2 bg-success p-3">Name : <?= $_SESSION['user'][0];?></h3>
                <h3 class="text-center border my-2 bg-primary p-3">Email : <?= $_SESSION['user'][1];?></h3>
            </div>
        </div>
    </div>

<?php include './inc/footer.php';?>