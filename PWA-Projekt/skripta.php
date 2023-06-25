<?php

    if(isset($_POST['submit']))
    {
        $naslov = $_POST['title'];
        $kratki_sadrzaj = $_POST['about'];
        $sadrzaj = $_POST['content'];
        $slika = $_POST['pphoto'];
        $kategorija = $_POST['category'];

        if(isset($_POST['archive']))
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
                        <img src="slike/'. $slika . '">
                        <h2>'. $naslov .'</h2>
                        <div class = "row">
                            <article>
                                <p>'. $sadrzaj .'</p>
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
            
        }
    }

?>