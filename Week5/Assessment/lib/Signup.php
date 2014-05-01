<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author 000806689
 */
class Signup {
    //put your code here
    
    
    
    public $email;
    public $username;
    public $password;
    public $confirmpassword;
    
    protected $errors = array();
    
    protected $state_list = array('AL'=>"Alabama",  
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
    
            
    function __construct() {
        
        $this->list = filter_input(INPUT_POST, 'list');
        
        $this->email = filter_input(INPUT_POST, 'email');
  
        $this-> username = filter_input(INPUT_POST, 'username');
        
        $this-> password = filter_input(INPUT_POST, 'password');
        $this-> confirmpassword = filter_input(INPUT_POST, 'confirmpassword');
        
        
    }
    
    
    
     /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */ 
    public function entryIsValid(){
        $this->emailEntryIsValid();
        $this->usernameEntryIsValid();
        $this->passwordEntryIsValid();
        
        return ( count($this->errors) ? false : true );
    }

    public function getState(){
        return $this->list;
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getConfirmpassword() {
        return $this->confirmpassword;
    }

   

    public function getError(){
    
        return $this->errors;
        
    }
    
     /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */    
    public function emailEntryIsValid() {
         $email = $this->getEmail();
         if ( empty($email) ) {
            $this->errors["email"] = "Email is missing.";
         } else if ( !Validator::emailIsValid($this->getEmail()) ) {
            $this->errors["email"] = "Email is not valid.";                
         } 
        
        return ( empty($this->errors["email"]) ? true : false ) ;
    }
    
    public function usernameEntryIsValid(){
   
        $username = $this->getUsername();
        
        if (empty($username)) {
            $this->errors["username"] = "username is missing.";
        }else if  (!validator::nameIsValid($this->getUsername())){
            $his->errors ["username"] = "Username is empty.";
        }
        
        
    }
    
    public function passwordEntryIsValid() {
        
        $password = $this->getPassword();
        
        if (empty ($password)){
            $this->errors["password"] = "Password is empty.";
        } else if ($this->getConfirmpassword() !== $this->getPassword()){
             $this->errors ["password"] = "Comfirm password does not match.";
        }
        else if (!Validator::passwordIsValid($this->getPassword())){
        
         $this->errors ["password"] = "password is not valid. Please make sure its greater then SIX characters.";
            
        }
        
    }
    
    
     /**
    * A static method to check if a Post request has been made.
    *    
    * @return boolean
    */    
    public static function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
    
    
    } 
    
    

