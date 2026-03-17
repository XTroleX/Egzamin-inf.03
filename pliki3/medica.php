<!DOCTYPE html>
<html lang="pl">
      <?php
        $polaczenie = mysqli_connect("localhost","root","","medica");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Medica</title>
    <link rel="icon" href="obraz2.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>
    <article>
        <?php
            $zap1 = "SELECT abonamenty.nazwa, abonamenty.cena, abonamenty.opis FROM abonamenty;";
            $wynik =  mysqli_query($polaczenie,$zap1);
            if($wynik){
                while ($row = mysqli_fetch_array($wynik)){
                    echo "<h3>Pakiet $row[0] - cena $row[1] zł</h3>";
                    echo "<p>$row[2]</p>";
                }
            }
        ?>
<a href="opis.html">Dowiedz się więcej</a>
    </article>
    <main>
        <section>
    <h2>Standardowy</h2>
    <ul>
        <?php
                    $zap3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 1;";
                    $wynik =  mysqli_query($polaczenie,$zap3);
                    
                    while ($row = mysqli_fetch_array($wynik)){
                    echo "<li>$row[1]</li>";
                    
                    }
                    
                ?>
    </ul>
        </section>
        <section>
            <h2>Premium</h2>
 <ul>
        <?php
                    $zap3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 2;";
                    $wynik =  mysqli_query($polaczenie,$zap3);
                    
                    while ($row = mysqli_fetch_array($wynik)){
                    echo "<li>$row[1]</li>";
                    
                    }
                    
                ?>
    </ul>
        </section>
        <section>
            <h2>Dziecko</h2>
 <ul>
        <?php
                    $zap3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 3;";
                    $wynik =  mysqli_query($polaczenie,$zap3);
                    
                    while ($row = mysqli_fetch_array($wynik)){
                    echo "<li>$row[1]</li>";
                    
                    }
                    
                ?>
    </ul>
        </section>
    </main>
    <footer>
        <p>
            <img src="obraz2.png" alt="przychodnia">
            Stronę przygotował: 000000000000
        </p>
    </footer>
    <?php
        mysqli_close($polaczenie);
    ?>
</body>
</html>