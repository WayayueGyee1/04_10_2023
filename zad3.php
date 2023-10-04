<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź przedział</title>
</head>
<body>
    <h1>Sprawdź, czy liczba mieści się w przedziale</h1>

    <form method="post" action="">
        <label>Podaj liczbę:</label>
        <input type="text" name="liczba">
        <input type="submit" name="sprawdz" value="Sprawdź">
    </form>

    <?php
    
    if (isset($_POST['sprawdz'])) {
        
        $liczba = intval($_POST['liczba']);

       
        if ($liczba >= 100 && $liczba < 150) {
            echo "Liczba $liczba mieści się w przedziale <100,150).";
        } else {
            echo "Liczba $liczba nie mieści się w przedziale <100,150).";
        }
    }
    ?>

</body>
</html>
