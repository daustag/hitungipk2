<?php
 $matkul= $_GET['txtmatkul'];
 $SKS=$_GET['txtSKS'];
 $Nilai=$_GET['txtNilai'];
 
   echo "<table border='1'>";
        echo "<tr>
       <td>Mata Kuliah</td>
        <td>SKS</td>
       <td>Nilai</td>
       </tr>";
     
    foreach($matkul as $key => $n){ // menampilkan array kedalam table
         
         echo "<tr>
        <td>$n</td>
        <td>$SKS[$key]</td>
        <td> $Nilai[$key]</td>
        </tr>";
    }
       
        echo "</table>";
         
    $bobot=array();
   
       
       foreach ($Nilai as $a) { // menentukan bobot nilai
         if($a=="A"){
         $bobot[]=4;
      }else if ($a=="B"){
          $bobot[]=3;          
      } else if ($a=="C"){
          $bobot[]=2;        
      } else if ($a=="D"){
          $bobot[]=1;        
      } else{
          $bobot[]=0;
      }
        }  
       $ip=array();
       $pi=array();
       foreach ($SKS as $key => $value) {  
           $ip[$key]=$value*$bobot[$key]; // menghitung ipk dengan sks* nilai
           $pi[]=$ip[$key];
       }
           
          $ipk= array_sum($pi)/ array_sum($SKS);  // Hasil akhir yaitu jumlah sks*nilai dibagi jumlah sks total
          echo "IPK anda adalah :"  .$ipk;
         
 
?>