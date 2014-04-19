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
    
    
    
    private $email;
    private $username;
    private $password;
    private $confirmpassword;
    
    private $errors = array();
    
    function __construct() {
        
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
    
    

