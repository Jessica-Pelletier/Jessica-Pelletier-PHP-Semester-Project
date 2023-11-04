<?php 
require("functions.php");
require("database.php");
$sql = "SELECT firstname FROM users";
$users = pdo($pdo, $sql)->fetch();
?>
<!--DOES NOT WORK. MUST FIX-->
<aside>
        <nav>
            <p class=greeting>Hello, <?= ($users['firstname']) ?>  </p> 
            <ul class=asideul>
                <li><a href="outofscope.php">Profile</a></li>
                <li><a href="outofscope.php">Itineraries</a></li>
                <li><a href="outofscope.php">Settings</a></li>
                <li class=logout><a href="outofscope.php">Log out</a></li>
            </ul>

        </nav>

    </aside>