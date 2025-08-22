<?php
// require_once __DIR__ . "/../../config/database.php";
// require_once __DIR__ . "/../../core/Model.php";
class Teacher {
    public $firstName;
    public $lastName;
    public function __constuct($firstName, $lastName, $isStudentRepresentative)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}