<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGX 01</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <?php
    $numbers = [];
    // for ($i = 0; $i < 15; $i++) {
    //     $numbers[] = rand(0, 300);
    // }

    $i = 0;
    while ($i < 15) {
        $numbers[] = rand(0, 300);
        $i ++;
    }
    ?>

    <div>
        <ul>
            <?php 
                foreach ($numbers as $number) {

                    echo '<li';
                    if ($number > 200) {
                        echo ' class="rouge"';
                    }
                    echo '>' . $number . '</li>';

                    // if ($number > 200) {
                    //     echo '<li class="rouge">' . $number . '</li>';
                    // } else {
                    //     echo '<li>' . $number . '</li>';
                    // }
                }
            ?>
        </ul>
    </div>
</body>
</html>