<?php 
print("continue");print("<br>");
print("continue yazan kısma kadar kodlar çalışır continue çalıştığı anda döngünün o anki adımı atlanır
ve bir sonraki adımdan devam eder");

print("<table border=".'"1px"'.">");

for($i=1;$i<=20;$i++){
    
    if($i%3!==0){
        print("<td>$i</td>");
        
    }else{
    print("</tr>");
    print("<tr>");
    continue;
    }
    
}
print("</table>");


?>