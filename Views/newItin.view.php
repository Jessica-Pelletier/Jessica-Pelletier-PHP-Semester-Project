<?php

require("database.php");
require("config.php");
require("itinerarylogic.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>New Itinerary</title>
</head>

<body>
    <?php require('partials/logoheader.php') ?>
    <main class=newitin>
        <div class=newitindiv>
            <h1>New Itinerary</h1>

            <div class=form>
                <form action="newdetail.php" method="POST">

                <label for="location">Where are you going?</label>
                <select name="location" id="location" required>
                <?php
                        // Check if $enum_values is set before using it
                        if (!empty($enum_values)) {
                            foreach ($enum_values as $value) {
                                echo "<option value=\"$value\">$value</option>";
                            }
                        } else {
                            echo "<option value=\"\">No locations available</option>";
                        }
                        ?>
                </select>

                    <label for="days">How many days?</label>
                    <input type="number" name="days" id="days" required>


                    <input type="submit" value="Create">
                    <div class=cancel-container> <button><a href=home.php>Cancel</a></button></div>
            </div>


            </form>
        </div>

    </main>
    <?php require('partials/footer.php') ?>
</body>

</html>