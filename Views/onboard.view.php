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
        <!--TODO: Add action to form -->
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name">
            <label for="email">Email:</label>
            <input type="text" name="email">
            <label for="password">Password</label>
            <input type="text" name="password">
            <label for="password">Re-enter Password</label>
            <input type="text" name="password">
            
            <input type="checkbox" name="terms" value="true">
            <label for="terms">I agree to the <a href="outofscope.php">terms and conditions.</a></label>

                
            <!-- <a href="onboard.php"><p><input type="submit" value="Create"></p></a> TODO:Make link to onboard -->
        </form>
        <button><a href="home.php">Sign up</a></button> <!-- This is a sudo button for temp user flow ONLY, please delete once form button is properly linked-->
</div>
    </main>
<?php require('partials/footer.php') ?>

</body>

</html>