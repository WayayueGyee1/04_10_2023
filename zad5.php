<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź kategorię wiekową</title>
</head>
<body>
    <h1>Sprawdź kategorię wiekową</h1>

    <form method="post" action="">
        <label>Podaj wiek:</label>
        <input type="text" name="wiek">
        <input type="submit" name="sprawdz" value="Sprawdź">
    </form>

    <?php
   
    if (isset($_POST['sprawdz'])) {
        
        $wiek = intval($_POST['wiek']);

      
        if ($wiek < 11) {
            echo "Wiek $wiek to dziecko.";
        } elseif ($wiek >= 11 && $wiek <= 17) {
            echo "Wiek $wiek to nastolatek.";
        } else {
            echo "Wiek $wiek to dorosły.";
        }
    }
    ?>

</body>
</html>
