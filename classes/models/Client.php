<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author Maame Apenteng
 */
class Client {
    
    /**
     *
     * @var int
     */
    private $id;
    
    /**
     *
     * @var string
     */
    private $firstName;
    
    /**
     *
     * @var string
     */
    private $lastName;
    
    /**
     *
     * @var string Client's Phone Number 
     */
    private $phoneNumber;
    
    /**
     * 
     * @param int $id
     * @param string $forename
     * @param string $surname
     * @param string $phoneNumber
     */
    public function __construct($id, $forename, $surname, $phoneNumber) {
        $this->id = $id;
        $this->firstName = $forename;
        $this->lastName = $surname;
        $this->phoneNumber = $phoneNumber;
    }
    
    //create function
}
