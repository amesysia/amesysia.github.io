<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

    <form method="post">
        Satır Sayısı: <input type="number" name="satir">
        <br><br>
        Sütun Sayısı: <input type="number" name="sutun">
        <br><br>
        <button type="submit">Oluştur</button>
    </form>

    <hr>

    <?php
    if ($_POST) {
        
        $satir_sayisi = $_POST['satir'];
        $sutun_sayisi = $_POST['sutun'];

        echo "<h3>Tablo</h3>";
        echo "<table>";

        for ($x = 1; $x <= $satir_sayisi; $x++) {
            echo "<tr>"; 

            for ($y = 1; $y <= $sutun_sayisi; $y++) {
                $rastgele_sayi = rand(1, 100); 
                echo "<td>" . $rastgele_sayi . "</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>