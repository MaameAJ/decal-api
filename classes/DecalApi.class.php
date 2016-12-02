<?php

require_once 'API.class.php';

/**
 * Description of DecalApi
 *
 * @author Maame
 */
class DecalApi {
    protected $User;

    public function __construct($request, $origin) {
        parent::__construct($request);

        // Abstracted out for example
        $APIKey = new Models\APIKey(); //TODO create this class
        $User = new Models\User(); //TODO create this class

        if (!array_key_exists('apiKey', $this->request)) {
            throw new Exception('No API Key provided');
        } else if (!$APIKey->verifyKey($this->request['apiKey'], $origin)) {
            throw new Exception('Invalid API Key');
        } else if (array_key_exists('token', $this->request) &&
             !$User->get('token', $this->request['token'])) {

            throw new Exception('Invalid User Token');
        }

        $this->User = $User;
    }

    /**
     * Example of an Endpoint
     */
     protected function appointment($data) {
        if ($this->method == 'GET') {
            //return based on date or id
            return "NotImplementedYet";
        } else if($this->method == 'POST') {
            //$client = getclient();
            $dt = new DateTime(); //TODO figure out how to sort datetime $data['date'], $data['time']
            $appt = new Appointment($client, $dt); //TODO add this constructor
            return "NotImplementedYet"; //addAppointment
        } else if($this->method == 'DELETE') {
            return "NotImplementedYet"; //deleteAppt($data[id]);
        } else {
             return "Does not accept this type of request.";
        }
     }
     
     protected function all() {
         //grab all the functions depending on API
     }
}
