<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>New Detail</title>
</head>
<?php require('partials/logoheader.php') ?>

<body>
    <main class=newdetail>
        <div class=itincard>
            <h1>Spain</h1> <!-- TODO: Php make responsive to location selected by user-->
            <div class=itinitems>
                <h2>Day one</h2>
                <p>
                <ul>
                       <li>Hiking in the jungle</li>
                       <li>Wine in the city</li>
                       <li>Cheese tasting in the village</li>
                    </ul>
                </p>
                <h2>Day two</h2>
                <p>
                <ul>
                       <li>Breakfast at Ihop</li>
                       <li>Beach walk downtown</li>
                       <li>Suntanning and burgers at the beach</li>
                    </ul>
                </p>
                <h2>Day three</h2>
                <p>
                <ul>
                       <li>Full day cruise to island</li>
                       
                    </ul>
                </p>
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