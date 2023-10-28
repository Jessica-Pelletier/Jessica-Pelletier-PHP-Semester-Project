<?php
$currentURL = $_SERVER['REQUEST_URI'];
if ($currentURL == '/'){
    $showLoginButton = true;
} else {
    $showLoginButton = false;
}
?>


<link rel="stylesheet" href="styles/styles.css">

<header class=header>
<a href='home.php'><img src="images/WanderWiseLogo.png" width=125 alt="itinerary Logo"></img></a>

<?php
if ($showLoginButton){
    echo '<a href="outofscope.php"><button type="button">Log in!</button></a>';
} ?>

</header>


