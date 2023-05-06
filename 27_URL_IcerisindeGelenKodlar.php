<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL İÇERİSİNDE GELEN KODLAR</title>
</head>
<body>
    <?php 
    print("http protokolüne göre adres çubuğundan gönderilen bazı karakterler ASCII kod tablosunda bulunmayıp Türkçe de ve bazı diğeralfabelerde bulunuyor ise bu karakterler kodlanarak gönderilmektedir bu kodlar aşağıda tablo halinde verilmiş");
    
    $karakterler=array("ü => %FC",
                        "Ü => %DC",
                        "ö => %F6",
                        "Ö => %D6",
                        "ı => %FD",
                        "İ => %DD",
                        "ğ => %F0",
                        "Ğ => %D0",
                        "ş => %FE",
                        "Ş => %DE",
                        "ç => %E7",
                        "Ç => %C7",
                        "% => %25",
                        "& => %26",
                        "[ => %5B",
                        "] => %5D",
                        "{ => %7B",
                        "} => %7D",
                        "? => %3F",
                        "= => %3D"
                        
                    
);
print('<table border="1px"><tr>
');

foreach($karakterler as $i =>$d){
    if($i!=0){
        if($i%5==0 & $i==count($karakterler)-1){
            echo "<td>".$i." => ".$d."</td>";
            break;
        }
        if($i==count($karakterler)-1){
            echo "<td>".$i." => ".$d."</td>";
            break;
        }
        if($i%5==0){
            if($i==5){
                echo "</tr><tr><td>".$i." => ".$d."</td>";
                continue;
            }else{
                echo "</tr><tr><td>".$i." => ".$d."</td>";
                continue;
            }
        }
        echo "<td>".$i." => ".$d."</td>";
    }else{
        echo "<td>".$i." => ".$d."</td>";
    }
}

print("</tr></table>
        "); 


    
    ?>
</body>
</html>