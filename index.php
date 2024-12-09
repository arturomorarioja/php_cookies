<?php

// If the user has just stated his/her colour preference, the cookie is set
if (isset($_POST['colour'])) {
    $colour = trim($_POST['colour']);

    // The cookie is set to expire in a year
    // (365 days times 24 hours times 60 minutes times 60 seconds)
    setcookie('displayColour', $colour, time() + (60 * 60 * 24 * 365));

// Otherwise, we check for the previous cookie setting
} else if (isset($_COOKIE['displayColour'])) {
    $colour = trim($_COOKIE['displayColour']);

// If the cookie was never set or it expired, we default to black
} else {
    $colour = 'black';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Cookies example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        #textContent {
            color: <?=$colour; ?>
        }
    </style>
</head>
<body>
    <header>
        <h1>PHP Cookies example</h1>
    </header>
    <main>
        <form id="frmColour" action="index.php" method="POST">
            <fieldset>
                <label for="txtColour">Please enter your preferred display colour:</label>
                <input type="text" id="txtColour" name="colour" value="<?=$colour ?>" required>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <p id="textContent">
            KEA - Copenhagen School of Design and Technology (Danish: K&oslash;benhavns Erhvervsakademi, usually referred to as KEA), is a school of higher education in Copenhagen, Denmark. The academy is an independent self-owning institution subordinated to the Ministry of Science, Innovation and Higher Education. Degree programmes offerered are mainly applied degrees, especially in design, technology and IT. The academy grants undergraduate and Professional degrees and has no graduate school. In addition to full-time studies the academy offers supplemental education, part-time programmes at bachelor's level and short-term courses for people who need to strengthen their qualifications. With 4,717 full-time students and 3,907 part-time students and about 350 employees as of 2015, the academy is one of the largest business academies in Denmark.
        </p>
    </main>
    <footer>
        <p>&copy; 2021 Arturo Mora-Rioja</p>
    </footer>
</body>
</html>