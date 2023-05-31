
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RESİM GALERİSİ</title>
</head>
<body>  
<?php
// img klasöründeki resimlerin dosya yollarının alınması
$dizin_adi="./img";
$dizin=opendir($dizin_adi);
$sy=0;
$resimler=array();
while(gettype($bilgi=readdir($dizin))!="boolean"){
    if(is_file("$dizin_adi/$bilgi")){
        $resimler[$sy]=($dizin_adi."/".$bilgi);
        $sy++;
    }
}
closedir($dizin);
?>
<!--sayfa sayısının belirlenmesi-->

<!--RESİM TABLOSU-->
<h1 align="center">RESİMLER</h1>
<table border="1px" align="center" style="border-style:solid;" >
    <?php 
    if(@isset($_GET['ressyc'])){
        listele($resimler,$_GET['ressyc']);
    }else{
        $_GET['ressyc']=0;
        listele($resimler,$_GET['ressyc']);
    }
    function listele($resimler,$resimsayac){
        if($resimsayac>=count($resimler)){
            ?>
            <script>
                alert("sayfa sonu");
            </script>
            <?php
        }else{
            for($i=1;$i<=4;$i++){
                //satır
                echo "<tr>";
                for($j=1;$j<=5;$j++){
                    //sutun
                    echo '<td><img src="'.$resimler[$resimsayac].'" height="100px" width="150px"></td>';
                    $resimsayac++;
                    if(count($resimler)==$resimsayac){
                        break;
                    }
                }
                if(count($resimler)==$resimsayac){
                    break;
                }
            }
        $_GET['ressyc']=$resimsayac;
        @$_GET['sayfa']+=1;
        }
    }
    ?>
    <script>
        function sayfadegisileri(sayac,maksres,sayfa){
                if(sayac>=maksres){
                    alert("sayfa sonudasınız");
                }else{
                window.location.href = "33-18_Uygulama6.php?ressyc="+sayac+"&sayfa="+sayfa;
                }
            }
        function sayfadegisgeri(sayac1,sayfa1){
                sayac1-=40;
                sayfa1-=2;
                if(sayac1<0){
                    alert("sayfa başındasınız");
                    sayac1=0;
                    sayfa1=0;
                    window.location.href = "33-18_Uygulama6.php?ressyc="+sayac1+"&sayfa="+sayfa1;
                }
                window.location.href = "33-18_Uygulama6.php?ressyc="+sayac1+"&sayfa="+sayfa1;
            }
    </script>
    <tr>
        <td colspan=2><button onclick="sayfadegisgeri(<?php echo @$_GET['ressyc'].','.@$_GET['sayfa'];?>)"><<</button></td>
        <td>
            <div id="ssayisi" align="center">
            <?php 
            echo $_GET['sayfa']
            ?>
            </div>
        </td>
        <td align="right" colspan=2>
            <button onclick="sayfadegisileri(<?php echo @$_GET['ressyc'].','.count($resimler).','.@$_GET['sayfa'];?>)">>></button>
        </td>
    </tr>
</table>  
</body>
</html>

