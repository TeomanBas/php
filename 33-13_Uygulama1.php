<form action="" method="POST">
    <table border="1px" valign="top">
        <tr>
            <td valign="top">metin girişi</td>
            <td>
                <textarea name="metin" rows=5 cols=40></textarea>
            </td>
        </tr>
        <tr><td colspan="3" align="right"><input type="submit"></td></tr>
    </table>
</form>
<?php 
if($_POST){
    $dosya=fopen("kayit.txt","a+");
    $yazma=fwrite($dosya,$_POST['metin'],strlen($_POST['metin']));
    if($yazma){
        print("yazıldı");
    }else{
        print("yazılamadı");
    }
}
print("<hr>");
?>
