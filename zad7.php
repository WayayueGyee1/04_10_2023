<!DOCTYPE html>
<html>
<head>
    <title>Wyznacz najmniejszą z trzech liczb</title>
</head>
<body>
    <h1>Wyznacz najmniejszą z trzech liczb</h1>

    <form method="post" action="">
        <label>Podaj pierwszą liczbę:</label>
        <input type="text" name="liczba1"><br>
        <label>Podaj drugą liczbę:</label>
        <input type="text" name="liczba2"><br>
        <label>Podaj trzecią liczbę:</label>
        <input type="text" name="liczba3"><br>
        <input type="submit" name="sprawdz" value="Sprawdź">
    </form>

    <?php
    
    if (isset($_POST['sprawdz'])) {
       
        $liczba1 = floatval($_POST['liczba1']);
        $liczba2 = floatval($_POST['liczba2']);
        $liczba3 = floatval($_POST['liczba3']);

       
        $najmniejsza = min($liczba1, $liczba2, $liczba3);

        echo "Najmniejsza z podanych liczb to $najmniejsza.";
    }
    ?>

</body>
</html>
