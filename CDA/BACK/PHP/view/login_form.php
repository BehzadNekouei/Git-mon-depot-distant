<?php
    $titile='Login';
    include ('header.php');
?>
<div class="container">
    <div class="row col-4 mx-auto rounded p-5 bg-warning shadow mt-5">
        <h1 class="text-center">Login</h1>
        <form action="../controler/login_script.php" method="POST">
            <div class="my-2">
                <label for="username" class="form-label">Username :</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="my-2">
                <label for="password" class="form-label">Password :</label>
                <input type="password" id="password"  name="password" class="form-control">
            </div>
            <div class="my-4">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
                <a href="inscription_form.php" class="btn btn-danger">Inscription</a>
                <p><a href="forget_form.php"> Mot de passe perdu?</a></p>
            </div>
        </form>
    </div>
</div>
<?php
    include ('footer.php');
?>