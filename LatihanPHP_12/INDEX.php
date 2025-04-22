<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo"<h1>Wellcome to my First Website with PHP<h1/>";?>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est iste, et dignissimos iure quae maxime at doloremque placeat aspernatur doloribus necessitatibus eaque voluptatem delectus sapiente ratione quam laborum inventore quia.</p>
    <p>My Name is <?php echo "<b>Obert Sean</b>";?></p>
    <hr/>
    <h4>Menulis Variabel di PHP</h4>
    <?php
        $nama = "Obert";
        $umur = 17;
        $lakilaki = true;
        $saldo = null;
        $hobby = ["Memancing","Berenang"];
        $makanan_fav = array ("Model","Bakso","Pepek");

        const PI = 3.14;
        echo "Nilai PI = ", PI;
        echo "<br/>";
        echo "Umur = $umur";
        echo "<br/>";
        
        foreach ($hobby as $key => $value){
            echo "Hobi".($key+1). " = $value <br/>";
        }

        $saldo =1000;
        echo"Saldo = \"\$$saldo USD\"";
    ?>
</body>
</html>