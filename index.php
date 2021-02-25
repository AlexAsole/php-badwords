<?php 
    $cannarsi = "Però quanto a te, quanto quel che non puoi fare per tu per te qualcosa da poter fare potrebbe esserci.
    Ma non ti costringerà nessuno; pensa da te stesso, decidi da te stesso che cosa tu stesso debba fare,
    beh che tu non abbia rammarichi.";

    $long = strlen($cannarsi);

    $censored = str_replace($_GET["badword"], "**", $cannarsi);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

    <h1>Citazione Gualterio Cannarsi</h1>
    <div><?php echo $cannarsi; ?></div><br>
    <div><?php echo "Questa citazione è lunga: " . $long . " caratteri!"; ?></div><br>
    <div><?php echo $censored; ?></div>

    
</body>
</html>