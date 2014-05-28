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
        // put your code here
        
        Util::confirmAccess();
      
        $state_list = States::getState();
        
         $address = new AddressBook();
         
         
         if ( Util::isPostRequest() ) {
             
              $AddressbookModel = new Addressbookmodel(filter_input_array(INPUT_POST));
              
              if ( $address->create($AddressbookModel) ) {
                  echo '<p>ADDRESS ADDED</p>';
              } else {
                   echo '<p>ADDRESS COULD NOT BE ADDED</p>';
              }
          }
         
         
         $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
//         
         $addressResult = $address->read($id);
     
        ?>
        
         <!-- UPDATE FORM  -->
         
        <form class="form-container" name="mainform" action="#" method="post"> 
           
                <div class="form-title"><h2>Create Entry</h2></div>
                
                <div class="form-title">Name</div>
                <input class="form-field" id="name" type="text" name="name" value="" /> <br />
               
              <div class="form-title">Address</div>
                <input class="form-field" id="address" type="text" name="address" value="" /> <br />
               
                <div class="form-title">City</div>
                <input class="form-field" id="city" type="text" name="city" value="" /> <br />
               
               
                <label for="state">State:</label> 
                   
                <select name="state">
                 <?php 
               
                foreach ($state_list as $key => $value ) {
                   
                     echo "<option value=\"$key\" selected = \"selected\">$value</option>\n";         
                }
               ?>
                </select> <br />
                
                 <div class="form-title">Zip</div>
                <input class="form-field" id="zip" type="text" name="zip" value="" /> <br />
               
                
                <input type="hidden" name="id" value="<?php echo $addressResult['id']; ?>" />
                
                <div class="submit-container">
               <input class="submit-button" type="submit" value="Submit" />
</div>
            
        </form>
        
        <br> 
        <!-- Button to return to viewaddress  -->
        <form><input class="submit-button" type="button" value="Return to Address Book" onClick="window.location.href='viewaddress.php'"></form>
        
    </center
    </body>
</html>
