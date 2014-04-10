<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table width = 300, border = 10>
        <?php
       
      
       
       for ($i = 1; $i <= 100; $i++){
           $today = microtime(); //date("Y-m-d H:i:s"); 
             if ($i%2 == 0){

            echo  '<tr style="background-color:silver;">';
            }
        else{            
           echo "<tr>";
         }
            
         echo "<td>$i</td>";
         echo "<td>$today</td>"; 

         echo "</tr>";        
       }
         
       
      
        ?>
        </table>
    </body>
</html>
