<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:16
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>-->



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="main.css">

</head>
<body>

<?php

    require_once '_header.php';

?>
<main>
    <?= $content ?>
</main>
<?php

require_once '_footer.php';

?>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>
