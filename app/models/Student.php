<?php
// require_once __DIR__ . "/../../config/database.php";
// require_once __DIR__ . "/../../core/Model.php";
class Student {
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