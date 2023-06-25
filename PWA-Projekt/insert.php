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

    $picture = $_FILES['pphoto']['name'];
    $title = $_POST['title'];
    $about = $_POST['about'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $date=date('d.m.Y.');
    if(isset($_POST['archive'])){
        $archive=1;
    }else{
        $archive=0;
    }
    $target_dir = 'slike/'.$picture;
    move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
    $query = "INSERT INTO tablica (datum, naslov, sazetak, tekst, slika, kategorija,
    arhiva ) VALUES ('$date', '$title', '$about', '$content', '$picture',
    '$category', '$archive')";
    $result = mysqli_query($dbc, $query) or die('Error querying databese.');
    mysqli_close($dbc);

    if($archive == 0)
    {
        echo '<!DOCTYPE html>
            <html>
                <head>
                    <meta charset="utf-8"/>
                    <title>Projekt PWA</title>
                    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css"/>
                    <link rel="stylesheet" type="text/css" href="style.css">
                </head>
            
                <body>
                    <header>
                        <h1>Top Lista</h1>
                        <nav>
                            <ul>
                                <li><a class="a1" href="index.html">Home</a></li>
                                <li><a class="a1" href="1_nav.html">Pjesme</a></li>
                                <li><a class="a1" href="2_nav.html">Albumi</a></li>
                                <li><a class="a1" href="unos.html">Unos</a></li>
                            </ul>
                        </nav>
                    </header>
                    
                    <section class = "container">
                        <img src="slike/'. $picture . '">
                        <h2>'. $title .'</h2>
                        <div class = "row">
                            <article>
                                <p>'. $content .'</p>
                                <a href=""></a>
                            </article>
                        </div>
                    </section>
            
                    <footer>
                        <p>Tin Dumić</p>
                        <p><a href ="mailto:tdumic@tvz.hr">tdumic@tvz.hr</a></p>
                        <p>2023</p>
                    </footer>
                </body>
            </html>';
    }else
    {
        header("Location: index.php");
        die(); 
    }
?>