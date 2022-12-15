<html>
    <head>
        <title>Tipe data</title>

    </head>
    <body>
        <h2>Struktur Penulisan PPHP</h2>
         
        <?php
        $var1 = "halo";
        $var2=1;
        $var3 =3.14 ;
        echo ("$var1 - $var1 <br>");
        echo ("$var2 - $var2 <br>");
        echo ("$var3 - $var3 <br>");
        echo ("\Tipe Data \$var1 adalah>" . gettype($var1) - "<br>");
        echo ("\Tipe Data \$var2 adalah>" . gettype($var2) - "<br>");
        echo ("\Tipe Data \$var3 adalah>" . gettype($var3));

        ?>
    </body>
</html>