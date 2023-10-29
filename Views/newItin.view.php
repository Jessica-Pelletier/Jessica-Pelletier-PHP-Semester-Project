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

                <label for="destination">Where are you going?</label>
                <select name="destination">
                    <option value="Spain">Spain</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Greenland">Greenland</option>
                </select>

                <label for="duration">How many days?</label>
                <input type="number" name="duration">

                
                <input type="submit" value="Create">
               <div class=cancel-container> <button><a href=home.php>Cancel</a></button></div>
            </div>
            
            
            </form>
        </div>

    </main>
    <?php require('partials/footer.php') ?>
</body>

</html>