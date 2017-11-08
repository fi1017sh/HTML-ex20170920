<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:24
 */
$n= $_POST ['n'];
$m=$_POST ['m'];
$r=$_POST ['r'];
$g=$_POST ['g'];
$b=$_POST ['b'];
?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1 style="background-color:rgb(<?php echo $r . "," . $g . "," . $b ?>);">Hello World</h1>
<table border="1">

    <?php

    for($i=1;$i<=$n;$i++){
        echo"<tr>";
        for($j=1;$j<=$m;$j++){
           echo "<td width='20px'>" . "<span style='font-size: 2em'>" . $i*$j . "</td>";
        }
            echo "</tr>";
    }

    ?>
</table>

</body>
</html>


