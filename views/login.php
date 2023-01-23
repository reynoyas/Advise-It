<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .err {
            color: darkred;
        }
    </style>
</head>
<body>
<div class="container">

    <h1>Login Page</h1>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username"
                   name="username" value="<?php echo $un; ?>" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <!--<span class="err">Incorrect login</span><br>-->
        <?php
        if(!$validLogin){
            echo '<p class="err">Login is incorrect</p>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <?php
    //$fname = $_POST['fname'];
    //if(empty($fname)){
    //$fname_error = "Please put you name"
    //}
    ?>
    <?php
    //if(isset($fname_error)){
    ?>
    <?php //echo $fname_error ?>
    <?php //} ?>
</div>

</body>
</html>