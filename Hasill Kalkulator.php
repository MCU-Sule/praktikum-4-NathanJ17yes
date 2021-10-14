<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="NathanJoshua_2172026">
    <title>index</title>
</head>
<body align = "center">
<table border ='3' align = 'center' cellspacing = '0' width = "300px">
    <form>
       <tr>
             <td colspan = '2' align = 'center' bgcolor = 'ADFF2F'>kalkulator</Td>
             
        </tr>
        <tr>
        <td bgcolor = 'green' align = "left">Angka pertama</Td>
        <?php
            echo"<td width = '150px'>$_GET[a1]</Td>";
            ?>
         </tr>
         <tr>
             <td bgcolor = '228B22' align = "left" >Angka kedua</Td>
        <?php
             echo "<td>$_GET[a2]</Td>";
             ?>
       </tr>
         <tr>
             <td bgcolor = '228B22' align = "left" >Operator</Td>
        <?php
             echo "<td>$_GET[op]</Td>";
             ?>
        </tr>
        <tr>
             <td colspan = '2' bgcolor ='ADFF2F' align = "center" > Hasil : <?php 
             $satu = $_GET["a1"];
             $dua = $_GET["a2"];
             $tiga = $_GET["op"];
                if ($tiga =="+") {
                     echo $satu+$dua;
        } 
                else if ($tiga =="-") {
                     echo $satu-$dua;
    }
                else if ($tiga =="*") {
                     echo $satu*$dua;
    }
                else if ($tiga == "/") {
                    echo $satu/$dua;
    }
             ?> </Td>
         </tr>

       
</body>
</html>