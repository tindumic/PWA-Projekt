<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Projekt PWA</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php
            header('Content-Type: text/html; charset=utf-8');
            $servername = "localhost";
            $username = "root";
            $password = "";
            $basename = "PWA-Projekt";
            // Create connection
            $dbc = mysqli_connect($servername, $username, $password, $basename) or die('Error
            connecting to MySQL server.'.mysqli_error());
            mysqli_set_charset($dbc, "utf8");
            // Check connection
            if ($dbc) {
            #echo "Connected successfully";
            }
        ?>

        <header>
            <h1>Top Lista</h1>
            <nav>
                <ul>
                    <li><a class="a1" href="index.php">Home</a></li>
                    <li><a class="a1" href="kategorija.php?id=pjesme">Pjesme</a></li>
                    <li><a class="a1" href="kategorija.php?id=albumi">Albumi</a></li>
                    <li><a class="a1" href="unos.php">Unos</a></li>
                </ul>
            </nav>
        </header>
        
        <section class = "container">
            <h2>Pjesme</h2>
            
            <div class = "row center">
                <?php         
                    $query = "SELECT * FROM tablica WHERE arhiva=0 AND kategorija='pjesme' LIMIT 3";
                    $result = mysqli_query($dbc, $query);
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    echo '<article class = "col-lg-4 col-md-12 col-sm-12">';

                    echo '<a href="clanak.php?id='.$row['id'].'">';
                    echo '<img src="slike/'. $row['slika'] . '"';
                    echo '</a>';

                    echo '<a href="clanak.php?id='.$row['id'].'">';
                    echo '<h3>';
                    echo $row['naslov'];
                    echo '</h3></a>';
                    echo '<p>';
                    echo $row['sazetak'];
                    echo '</p>';
                    echo '</article>';
                }?>
            </div>
        </section>


        <section class="container">
            <h2>Albumi</h2>
            <div class="row center">
                <?php         
                    $query = "SELECT * FROM tablica WHERE arhiva=0 AND kategorija='albumi' LIMIT 3";
                    $result = mysqli_query($dbc, $query);
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    echo '<article class = "col-lg-4 col-md-12 col-sm-12">';

                    echo '<a href="clanak.php?id='.$row['id'].'">';
                    echo '<img src="slike/'. $row['slika'] . '"';
                    echo '</a>';

                    echo '<a href="clanak.php?id='.$row['id'].'">';
                    echo '<h3>';
                    echo $row['naslov'];
                    echo '</h3></a>';
                    echo '<p>';
                    echo $row['sazetak'];
                    echo '</p>';
                    echo '</article>';
                }?>

            </div>
        </section>

        <footer>
            <p>Tin Dumić</p>
            <p><a href ="mailto:tdumic@tvz.hr">tdumic@tvz.hr</a></p>
            <p>2023</p>
        </footer>
    </body>
</html>
