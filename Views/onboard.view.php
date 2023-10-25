<?php 
declare(strict_types = 1);
$password = '';
$message = '';
function is_password(string $password): bool
{
    if (
        mb_strlen($password) >= 8
        and preg_match('/[A-Z]/', $password)
        ){
            return true;
        }
        return false;
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];
        $valid    = is_password($password);
        $message  = $valid ?  'Password is valid' :
              'password not strong enough';
    }

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


        <?= $message ?>
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

            <input type="submit" value="Create">
            
        </form>
        <!-- <button><a href="home.php">Sign up</a></button> This is a sudo button for temp user flow ONLY, please delete once form button is properly linked -->
</div>
    </main>
<?php require('partials/footer.php') ?>

</body>

</html>