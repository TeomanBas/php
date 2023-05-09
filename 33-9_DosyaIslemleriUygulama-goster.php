<table width="650px" bgcolor="#0000ff" cellpadding="1" cellspacing="1">
    <tr align="center" bgcolor="#ffffff">
        <td>Ad Soyad</td><td>E-posta</td><td>Mesaj</td>
    </tr>
    <?php 
        $dosya=fopen("mesaj.txt","r") or die("dosya açılamadı");
        while(!feof($dosya)){
            $satir=fgets($dosya,1024);
            $satir=explode("||",$satir);
            echo @"<tr bgcolor=#ffffff>
            <td>$satir[0]</td><td>$satir[1]</td><td>$satir[2]</td></tr>";
            
        } fclose($dosya);
    ?>
</table>