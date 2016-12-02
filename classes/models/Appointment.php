<?php

include("Client.php");

/**
 * Description of Appointment
 *
 * @author Maame Apenteng
 */
class Appointment {
    /**
     *
     * @var int
     */
    private $id;
    
    /**
     *
     * @var Client 
     */
    private $client;
    
    /**
     *
     * @var DateTime 
     */
    private $datetime;
    
    /**
     *
     * @var array DateTime 
     */
    private $reminders;
    
    /**
     * 
     * @param int $id
     * @param Client $client
     * @param DateTime $datetime
     */
    public function __construct($id, $client, $datetime) {
        $this->id = $id;
        $this->client = $client;
        $this->datetime = $datetime;
        $this->reminders = null;
    }
    
    /**
     * 
     * @param array DateTime $array
     */
    public function addReminders($array)
    {
        $this->reminders = $array;
    }
    
    /**
     * 
     * @param DateTime $datetime
     */
    public function addReminder($datetime)
    {
        $this->reminders[] = $datetime; //add to last position
    }
}
