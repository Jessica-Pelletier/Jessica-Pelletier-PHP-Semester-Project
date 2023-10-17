<?php
$currentURL = $_SERVER['REQUEST_URI'];
if ($currentURL == '/index.php'){
    $showLoginButton = true;
} else {
    $showLoginButton = false;
}
?>


<link rel="stylesheet" href="styles/styles.css">
<!-- TODO: make header responsive to remove login button if not on index page!-->
<header class=header>
<img src="images/WanderWiseLogo.png" width=125 alt="itinerary Logo"></img>

<?php
if ($showLoginButton){
    echo '<a href="outofscope.php"><button type="button">Log in!</button></a>';
} ?>

</header>


