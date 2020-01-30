
<?php
    session_start();

    if (!isset($_SESSION['womanList'])) {
        $_SESSION['womanList'] = array();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Izbor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class ="content">
    <h1>Woman galery</h1>
    <img src="/zada4a/images/Wgalery.jpg" alt="Italian girl"><br>

    <a class="button" href="/zada4a/images/ital1.jpg">Choise ital.</a><br>
    <a class="button" href="/zada4a/images/bulg.jpg">Choise bulg.</a><br>
    <a class="button" href="/zada4a/images/usa.jpg">Choise usa.</a><br>

    <ul class="woman-list">
            <?php
                foreach ($_SESSION['womanList'] as $womanName) {
                    echo "<li>$womanName</li>";
                }
            ?>
        </ul>
            </div>

   
</body>
</html>