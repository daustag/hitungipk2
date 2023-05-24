<?php
 $jmlhmk =$_GET['txtjmlh'];  
    for($i=1;$i<=$jmlhmk;$i++){
   
        echo "<form action ='ipk.php' type='get'>";
           echo "<table width ='75%' table border='1'>";
            echo "<tr>
            <td>$i.</td>
               <td>MATKUL :</td> <td> <input type='text'name='txtmatkul[]'/></td>
               <td>SKS :</td><td> <input type='text'name='txtSKS[]'/></td>
                <td>NILAI :</td><td> <input type='text'name='txtNilai[]'/></td>
        </tr>";
             
             echo"</table>";
         
     }
        echo  "<br><input type='submit' name='submit' value='submit'/>";  
           echo"</form>" ;
?>