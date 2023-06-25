<!DOCTYPE html>
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
                    <li><a class="a1" href="index.php">Home</a></li>
                    <li><a class="a1" href="kategorija.php?id=pjesme">Pjesme</a></li>
                    <li><a class="a1" href="kategorija.php?id=albumi">Albumi</a></li>
                    <li><a class="a1" href="unos.php">Unos</a></li>
                </ul>
            </nav>
        </header>
        
        <section class = "container">
            <form enctype="multipart/form-data" action="insert.php" method="POST">
                    <div class="form-item">
                        <label for="title">Naslov vijesti</label>
                        <div class="form-field">
                            <input type="text" name="title" class="form-field-textual">
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="about">Kratki sadržaj (do 50 znakova)</label>
                        <div class="form-field">
                            <textarea name="about" id="" cols="30" rows="10" class="formfield-textual"></textarea>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="content">Sadržaj vijesti</label>
                        <div class="form-field">
                            <textarea name="content" id="" cols="30" rows="10" class="form-field-textual"></textarea>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="pphoto">Slika: </label>
                        <div class="form-field">
                            <input type="file" accept="image/jpg,image/png" class="input-text" name="pphoto"/>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="category">Kategorija vijesti:</label>
                        <div class="form-field">
                            <select name="category" id="" class="form-field-textual">
                                <option value="pjesme">Pjesme</option>
                                <option value="albumi">Albumi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-item">
                        <label>Arhiva
                        <div class="form-field">
                            <input type="checkbox" name="archive">
                        </div>
                        </label>
                    </div>

                    <div class="form-item">
                        <button type="reset" name='reset' value="Poništi">Cancel</button>
                        <button type="submit" name='submit' value="Prihvati">Submit</button>
                    </div>
                </form>
        </section>

        <footer>
            <p>Tin Dumić</p>
            <p><a href ="mailto:tdumic@tvz.hr">tdumic@tvz.hr</a></p>
            <p>2023</p>
        </footer>
    </body>
</html>

