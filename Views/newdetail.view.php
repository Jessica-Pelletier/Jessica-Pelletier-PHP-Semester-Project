<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>New Detail</title>
</head>
<?php require('partials/logoheader.php');
require('itinerarylogic.php'); 
?>

<body>
    <main class=newdetail>
        <div class=itincard>
            <h1><?php echo $location ?></h1> <!-- TODO: Php make responsive to location selected by user-->
            <div class=itinitems>
                <?php
                // Assuming $itinerary is available in this context
                if (isset($itinerary)) {
                    var_dump($itinerary);
                    foreach ($itinerary as $day => $activities) {
                        echo "<p>Day $day:</p>";
                        echo "<ul>";
                        foreach ($activities as $activity) {
                            echo "<li>$activity</li>";
                        }
                        echo "</ul>";
                    }
                } else {
                    echo "Itinerary not available.";
                }
                ?>
                <div class=detailbuttonsflex>
                    <button class=back><a href="newItin.php">Back</a></button>
                    <button class=save><a href="home.php">Save</a></button>
                </div>
            </div>

        </div>



    </main>
    <?php require('partials/footer.php') ?>
</body>

</html>