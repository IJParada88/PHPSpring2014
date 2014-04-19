<!DOCTYPE html>
<!--
Using PHP try to see how you would solve the issue of putting an error class
into each input.  I created the class for you, and the solution is solved
but in the refactoring phase there has to be a better way.  Also make sure
to populate the post values back into the field. 

Goals:
1.  Re-populate post values into the input fields.
2.  Put the "inputerror" class into the input form fields if 
    they are not populated on a post.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .error {
                border: 1px solid red;
                padding: 0.2em;
                color: red;
            }
            
            .inputerror {border: 1px solid red;}
        </style>
    </head>
    <body>
        <?php
        // put your code here
                $email = filter_input(INPUT_POST, 'email');
                $username = filter_input(INPUT_POST, 'username');
                $password = filter_input(INPUT_POST, 'password');
                $TextBoxErr1 = '';
                $TextBoxErr2 = '';
                $TextBoxErr3 = '';
            if ( !empty($_POST)) {
                
                $errorMessages = array(
                  "email" => 'email is invalid',  
                  "username" => 'username is not found',  
                  "password" => 'password does not work',  
                );
                
                
                //!empty = is a double negative, not empty means that is good.
                
                if (!empty($email)) {
                    $errorMessages['email'] = '';
                   
                } else {
                    $TextBoxErr1 = "inputerror";
                }
                if (!empty($username)) {
                    $errorMessages['username'] = '';  
                } else {
                     $TextBoxErr2 = "inputerror";
                }
                if (!empty($password)) {
                    $errorMessages['password'] = '';
                  
                } else {
                     $TextBoxErr3 = "inputerror";
                }
            
             }
        
             
             ?>
        
        
        <h2> My Form Demo </h2>
       <form name="mainform" action="#" method="post">            
           Email: <input class="<?php echo $TextBoxErr1; ?>" type="text" name="email" value="<?php echo $email; ?>" /> <br /> 
            <?php 
            if ( !empty($errorMessages["email"]) ) 
                echo '<p class="error">',$errorMessages["email"], '</p>';
            ?>
           Username: <input  type="text" class="<?php echo $TextBoxErr2; ?>" name="username" value="<?php echo $username; ?>" /> <br /> 
            <?php 
            if ( !empty($errorMessages["username"]) )
                echo '<p class="error">',$errorMessages["username"], '</p>';                
            ?>           
           Password: <input class="<?php echo $TextBoxErr3; ?>" type="password" name="password" /> <br />
            <?php 
            if ( !empty($errorMessages["password"]) )
                echo '<p class="error">',$errorMessages["password"], '</p>';                
            ?>
            <br />
            
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>