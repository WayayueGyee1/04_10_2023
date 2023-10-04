<!DOCTYPE html>
<html>
<head>
    <title>Ilość dni w lutym</title>
</head>
<body>
    <h1>Sprawdź ilość dni w lutym</h1>

    <form method="post" action="">
        <label>Podaj rok:</label>
        <input type="text" name="rok">
        <input type="submit" name="sprawdz" value="Sprawdź">
    </form>

    <?php
    
    function isLeapYear($year) {
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            return true;
        } else {
            return false;
        }
    }

    
    if (isset($_POST['sprawdz'])) {
        
        $rok = intval($_POST['rok']);

        if (isLeapYear($rok)) {
            echo "Rok $rok jest przestępny, więc luty ma 29 dni.";
        } else {
            echo "Rok $rok nie jest przestępny, więc luty ma 28 dni.";
        }
    }
    ?>

</body>
</html>
