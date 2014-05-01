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
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        // put your code here
        
            $signup = new Signup();
            $errors = array();
           $state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
           
          
 
     
 
    
            
              //echo <option value=". $arr[$i] .">" . $arr[$i] . "</option>";
            if ( $signup->isPostRequest()  ) {
                
                if ( $signup->entryIsValid() ) {
                    
                    echo '<div class="success">All fields are good</div>';
                
                }                
            else{
                    $errors = $signup->getError();
                }
            }
            
            if ( count($errors) ) {
                echo '<ul class="error">';
                foreach ($errors as $value) {
                    echo '<li>',$value,'</li>';
                }
                echo '</ul>';
            }
            
        ?>
        
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Sign-up Form:</legend>
                
                 <label for="username">Full Name:</label>
                <input id="username" type="text" name="username" value="<?php echo $signup->getUsername(); ?>" /> <br /> 
                <?php echo Util::getErrorMessageHTML('username', $errors); ?>
                
                <label for="email">Comments:</label> 
                <input id="" type="text" name="email" value="<?php echo $signup->getEmail(); ?>" /> <br />
                <?php echo Util::getErrorMessageHTML('email', $errors); ?>
                
                
               
                
                <select id="list" name="dropdown_list"><option value="<?php foreach($state_list as $value){
                echo "<option value=\"$value\">$value</option>\n";  } //echo getState(); ?>">Choose A State</option>"</select>
                
               
                
                

                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>