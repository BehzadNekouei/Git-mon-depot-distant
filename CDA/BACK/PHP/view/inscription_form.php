<?php
    $titile='Inscription';
    include ('header.php');
?>
<div class="container my-5">
    <div class="row col-4 mx-auto rounded p-5 bg-warning shadow">
        <h1 class="text-center">Inscription</h1>
        <form action="../controler/login_script.php" method="POST">
            <div class="my-3">
                <label for="lastname" class="form-label">Last name :</label>
                <input type="text" id="lastname" name="lastname" class="form-control">
            </div>
            <div class="my-3">
                <label for="firstname" class="form-label">First name :</label>
                <input type="text" id="firstname" name="firstname" class="form-control">
            </div>
            <div class="my-3">
                <label for="mail" class="form-label">E-mail address:</label>
                <input type="text" id="mail" name="mail" class="form-control">
            </div>
            <div class="my-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" id="password"  name="password" class="form-control">
            </div>
            <div class="my-3">
                <label for="passwordConfirm" class="form-label">Confirm assword :</label>
                <input type="password" id="passwordConfirm"  name="passwordConfirm" class="form-control">
            </div>
            <div class="my-3">
                <input type="submit" value="Send" name="Submit" class="btn btn-primary">
                <a href="login_form.php" class="btn btn-danger">Return</a>
            </div>
        </form>
    </div>
</div>
<?php
    include ('footer.php');
?>