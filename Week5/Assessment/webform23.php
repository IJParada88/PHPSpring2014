<?php include 'dependency.php'; ?>
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
        <?php
                $main = new MainForm();
                
                $state_list = States::getState();
                
                
        // put your code here
        
        
        ?>
        
       
        
        
        <h2> My Form Demo </h2>
        
       <form name="mainform" action="#" method="post">            
          
           
           Full Name: <input id="FullName" class="<?php //echo $TextBoxErr1; ?>" type="text" name="FullName" value="<?php echo $main->getName(); ?>" /> <br /> 
            
           Comments: <textarea id="Comments" class="" name="Comments"  ><?php echo $main->getComments(); ?></textarea> <br />  <br />
            
           List: <select id="list" name="List"> 
               <?php 
               
                foreach ($state_list as $value) {
                   if ($main->getList() == $value){
                     echo "<option value=\"$value\" selected = \"selected\">$value</option>\n";
                   }
                         else {
                   
                         echo "<option value=\"$value\">$value</option>\n"; 
                         
                         }
                }
               ?>
                
                 </select><br /><br />
       
            <input type="submit" value="Submit" />  
           
           
       </form>
        
    </body>
    
</html>
