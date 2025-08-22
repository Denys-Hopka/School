<?php
class Teacher 
{
    public $firstName;
    public $lastName;
    public function __constuct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}