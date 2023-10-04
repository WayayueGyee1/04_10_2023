<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź, czy są przynajmniej dwie takie same liczby</title>
</head>
<body>
    <h1>Sprawdź, czy są przynajmniej dwie takie same liczby</h1>

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
       
        $liczba1 = $_POST['liczba1'];
        $liczba2 = $_POST['liczba2'];
        $liczba3 = $_POST['liczba3'];

        
        if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3) {
            echo "Przynajmniej dwie z podanych liczb są takie same.";
        } else {
            echo "Nie ma przynajmniej dwóch takich samych liczb.";
        }
    }
    ?>

</body>
</html>
