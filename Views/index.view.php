<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/41a97b2717.js" crossorigin="anonymous"></script>

    <title>Index</title>
</head>
<!-- This is the landing page, before log in or account creation. It is the first page that you go to so I called it index. Although im not sure if renaming it to "landing" would be more appropriate. -->
<?php require('partials/logoheader.php') ?>

<body>
    <main>
        <div class=indexpage>

            <section class=indexhero>
                <h1>Plan, Play, Repeat</h1>
                <h2 class=indexh2>Make things simple with the Wander Wise Itinerary planner</h2>
                <a href="onboard.php"><button class=indexcta>Start Planning</button></a>

        </div>
        </section>
        <section class=flex-container-home>
            <div class=featureitem>
                <i class="fa-solid fa-pen-ruler fa-2xl"></i>
                <p>The ultimate tool for crafting a personalized travel experience.</p>

            </div>
            <div class=featureitem>
            <i class="fa-solid fa-clock fa-2xl"></i>
            <p>See more and do more. Optimize for efficiency and see more of the world.</p>
            </div>

            <div class=featureitem>
            <i class="fa-solid fa-plane fa-2xl"></i>
                <p>Discover curated recommendations for must-see attractions and hidden gems.</p>
            </div>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>

</html>