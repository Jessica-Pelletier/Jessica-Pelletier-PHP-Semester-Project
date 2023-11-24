<?php
$currentURL = $_SERVER['REQUEST_URI'];
if ($currentURL == '/dgl123-project/Jessica-Pelletier-PHP-Semester-Project/index.php'){
    $showLoginButton = true;
} else {
    $showLoginButton = false;
}

if ($currentURL != '/dgl123-project/Jessica-Pelletier-PHP-Semester-Project/index.php' || '/dgl123-project/Jessica-Pelletier-PHP-Semester-Project/onboard.php'){
    $showgreeting = true;
} else {
    $showgreeting = false;
}


?>


<link rel="stylesheet" href="styles/styles.css">

<header class=header>
<a href='home.php'><img src="images/WanderWiseLogo.png" width=125 alt="itinerary Logo"></img></a>

<?php
if ($showLoginButton){
    echo '<a href="outofscope.php"><button type="button">Log in!</button></a>';
}
?>
<div class=greeting>
<?php
if ($showgreeting){
    echo  'Hello, Jessica' ;
}
 ?>
</div>


</header>


