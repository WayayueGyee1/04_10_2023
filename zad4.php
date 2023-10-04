<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź liczbę</title>
</head>
<body>
    <h1>Sprawdź, czy liczba jest mniejsza, większa lub równa zero</h1>

    <form method="post" action="">
        <label>Podaj liczbę:</label>
        <input type="text" name="liczba">
        <input type="submit" name="sprawdz" value="Sprawdź">
    </form>

    <?php
   
    if (isset($_POST['sprawdz'])) {
       
        $liczba = floatval($_POST['liczba']);

        
        if ($liczba < 0) {
            echo "Liczba $liczba jest mniejsza od zera.";
        } elseif ($liczba > 0) {
            echo "Liczba $liczba jest większa od zera.";
        } else {
            echo "Liczba $liczba jest równa zero.";
        }
    }
    ?>

</body>
</html>
