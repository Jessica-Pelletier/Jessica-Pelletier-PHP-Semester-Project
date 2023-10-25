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
        <form action="home.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" name="password">

            <label for="password">Re-enter Password</label>
            <input type="password" name="password" required>
            
            <input type="checkbox" name="terms" value="true" required>
            <label for="terms">I agree to the <a href="outofscope.php">terms and conditions.</a></label>

            <a href="home.php"><input type="submit" value="Create"></a> 
            
        </form>
        <!-- <button><a href="home.php">Sign up</a></button> This is a sudo button for temp user flow ONLY, please delete once form button is properly linked -->
</div>
    </main>
<?php require('partials/footer.php') ?>

</body>

</html>