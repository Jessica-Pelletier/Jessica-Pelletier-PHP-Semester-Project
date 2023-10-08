<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboard</title>
</head>

<body>
    <?php require('partials/logoheader.php') ?>
    <main>
        <h1>Create an account</h1>
        <!--TODO: Add action to form -->
        <form action="" method="POST">
            <p>Name: <input type="text" name="name"></p>
            <p>Email: <input type="text" name="email"></p>
            <p>Password: <input type="text" name="password"></p>
            <p><input type="checkbox" name="terms" value="true">
                I agree to the terms and conditions.</p>
            <!-- <a href="onboard.php"><p><input type="submit" value="Create"></p></a> TODO:Make link to onboard -->
        </form>
        <a href="home.php">Sign up</a> <!-- This is a sudo button for temp user flow ONLY, please delete once form button is properly linked-->
    </main>

</body>

</html>