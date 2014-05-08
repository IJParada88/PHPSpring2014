<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainForm
 *
 * @author 000806689
 */
class MainForm {
    
    
    
    private $fname;
    private $comments;
    private $list;
    
    
    
    
    
    public function setFname($fname) {
        $this->fname = $fname;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }

    public function setList($list) {
        $this->list = $list;
    }

        
    function __construct() {
        
        $this->setFname(filter_input(INPUT_POST, 'FullName'));
  
        $this->setComments(filter_input(INPUT_POST, 'Comments'));
        
        $this->setList(filter_input(INPUT_POST, 'List'));        
    }
    
    
    public function getName() {
        return $this->fname;
    }

    public function getComments() {
        return $this->comments;
    }

    public function getList() {
        return $this->list;
    }
    
    
    
    
}
