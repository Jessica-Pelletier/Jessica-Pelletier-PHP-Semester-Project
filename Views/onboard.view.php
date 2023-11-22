<?php require("database.php");
require("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Onboard</title>
</head>

<body >
    <?php require('partials/logoheader.php') ?>
    <main class=onboardpage>
        <div class=onboardform>
        <h1>Create an account</h1>


   
        <form action="register.php" method="POST">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password</label>
            <div class=requirements>
            <p>Minimum 8 characters</p>
            <p>Must contain 1 Uppercase</p></div>
            <input type="password" name="password">

            <label for="passwordConfirm">Re-enter Password</label>
            <input type="password" name="passwordConfirm" required>
            
            <input type="checkbox" name="terms" value="true" required>
            <label for="terms">I agree to the <a href="outofscope.php">terms and conditions.</a></label>

            <input type="submit" value="Register">
            <p>Already have an account? <a href=outofscope.php>Sign in!</a></p>
            
        </form>
       
</div>
    </main>
<?php require('partials/footer.php') ?>

</body>

</html>