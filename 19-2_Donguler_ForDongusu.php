<table>
<?php 
for($i=0,$j=0;$i<=255;$i=$i+1,$j=$j+1){
?>
<tr bgcolor="rgb(<?php print $i;?>,<?php print $j;?>,0)">
    <td><?php print $i;?>,<?php print $j;?>,0</td>
</tr>
<?php
}
?>
</table>