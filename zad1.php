<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź parzystość</title>
</head>
<body>
    <h1>Sprawdź parzystość liczby</h1>

    <form method="post" action="">
        <label>Podaj liczbę:</label>
        <input type="text" name="liczba">
        <input type="submit" name="sprawdz" value="Sprawdź">
    </form>

    <?php
   
    if (isset($_POST['sprawdz'])) {
        
        $liczba = $_POST['liczba'];

        
        if ($liczba % 2 == 0) {
            echo "Liczba $liczba jest parzysta.";
        } else {
            echo "Liczba $liczba jest nieparzysta.";
        }
    }
    ?>

</body>
</html>
