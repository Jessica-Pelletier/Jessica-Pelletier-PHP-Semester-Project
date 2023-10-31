<?php 
declare(strict_types = 1);
$password = '';
$message = '';
require "database.php";
function is_password(string $password): bool  //checks password for requirements
{
    if (
        mb_strlen($password) >= 8                   //password must be at least 8 characters
        and preg_match('/[A-Z]/', $password)        // password must have a capital 
        ){
            return true;
        }
        return false;
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];
        $valid    = is_password($password);
        $message  = $valid ?  'Password is valid' :  //message if valid 
              'password not strong enough';          //message of not valid
    }
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $is_password = true) {
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $db->prepare("INSERT INTO users (firstname, email, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$firstname, $email, $password])) {
        echo "Registration successful!";
    } else {
        echo "Registration failed.";
    }
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
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password</label>
            <div class=requirements>
            <p>Minimum 8 characters</p>
            <p>Must contain 1 Uppercase</p></div>
            <input type="password" name="password">

            <label for="password">Re-enter Password</label>
            <input type="password" name="password" required>
            
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