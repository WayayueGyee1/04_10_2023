<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź podzielność</title>
</head>
<body>
    <h1>Sprawdź podzielność liczby</h1>

    <form method="post" action="">
        <label>Podaj pierwszą liczbę:</label>
        <input type="text" name="liczba1"><br>
        <label>Podaj drugą liczbę:</label>
        <input type="text" name="liczba2"><br>
        <input type="submit" name="sprawdz" value="Sprawdź">
    </form>

    <?php
    
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }

   
    if (isset($_POST['sprawdz'])) {
        
        $liczba1 = intval($_POST['liczba1']);
        $liczba2 = intval($_POST['liczba2']);

       
        if (isPrime($liczba1)) {
            
            if ($liczba2 % $liczba1 === 0) {
                echo "$liczba2 jest podzielna bez reszty przez $liczba1.";
            } else {
                echo "$liczba2 nie jest podzielna bez reszty przez $liczba1.";
            }
        } else {
            echo "$liczba1 nie jest liczbą pierwszą.";
        }
    }
    ?>

</body>
</html>
