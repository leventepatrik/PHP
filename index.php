<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezérlési szerkezetek</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
        echo "<h2>Véletlen számok</h2>";
        echo "parméter nélküli véletlen szám:<br>".rand()." <br>";
        echo "A véletlen szám maximuma:<br>".getrandmax()."<br>";
        echo "Zárt intervallumbeli véletlen szám:".rand(10,20)."<br>";
        echo "<h2>Globális változók</h2>";
        $x=7;
        $y=6;
        function myTest0(){
            $x=1;
            $y=2;
            $z = $x + $y;
            echo "A (lokális változók)$x és a $y öszzege:$z";
            $GLOBALS['z']= $GLOBALS['x']+$GLOBALS['y'];
            echo "<br>";
            echo "A (globális  változók)".$GLOBALS['x']." és a  ".
            $GLOBALS['y']. " Összege :".$GLOBALS['z']."<br>";
        }
        myTest0();

        echo "<h2>Operátorok</h2>";
        $adat1=8/3;
        echo "8/3 eredménye: $adat1<br>";
        echo "8/3 adatípusa :  ".gettype($adat1)."<br>";
        echo "<h2>Elágatások</h2>";
        $logikai = (5==0);
        echo "5 egyenlő  0-val?";
        echo ($logikai ? 'Ez igaz.' : 'Ez hamis.');
        if($logikai){
            echo "Ez igaz.<br>";
            
        }
        else{
            echo "Ez hamis.<br>";
        }
        $szam=rand(-1,1);
        echo "A véletlen szám:$szam<br>";
        switch ($szam){
            case -1:
                echo "A szám negatív";
                break;
            case 0:
                echo "A szám negatív";
                break;
            default:
                echo "A szám negatív";
                break;
            


        }

        $tomb0=array();
        for($i=0;$i<5;$i++){
            $random=rand(20,30);
            array_push($tomb0,$random);
            $osszeg=count($tomb0);
        }
        print_r($tomb0);
        
        echo $osszeg;
       






    
    ?>
    
</body>
</html>