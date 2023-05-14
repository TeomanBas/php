<table align="center" border="1px" bgcolor="#5c6ba7" width="600px">
    <tr align="center">
        <td>sıra no</td><td>ogrenci no</td><td>adi</td><td>soyadi</td>
    </tr>
    <?php 
        $baglanti=mysqli_connect("127.0.0.1","root","");
        mysqli_select_db($baglanti,"okul");
        $sql="SELECT ogr_no,ogr_ad,ogr_soyad FROM ogrenciler;";
        $sorgu=mysqli_query($baglanti,$sql);
        $sayac=0;
        while($satir=mysqli_fetch_row($sorgu)){
            $sayac++;
            echo "<tr>
                <td width='55px' align='right'>$sayac</td>
                <td width='75px' align='right'>$satir[0]</td>
                <td>$satir[1]</td>
                <td>$satir[2]</td>
            </tr>";
        }
        mysqli_close($baglanti);
    ?> 

</table>