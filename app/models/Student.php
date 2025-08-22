<?php
class Student 
{
    public $firstName;
    public $lastName;
    public $isStudentRepresentative;
    public function __constuct($firstName, $lastName, $isStudentRepresentative)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->isStudentRepresentative = $isStudentRepresentative;
    }
}