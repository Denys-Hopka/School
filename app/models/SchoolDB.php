<?php
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../../core/Model.php";
class SchoolDB extends Model {

    public function getClasses()
    {
        $sqlReq = 'SELECT designation FROM classes';
        $objects = [];
        $i = 0;
        foreach($this->db->query($sqlReq) as $row)
        {
            $objects[] = new SchoolClass();
            $objects[$i]->designation = $row['designation'];
            $i++;
        }
        return $objects;
    }



    public function getStudentsByClass($class)
    {
            $sqlReq = <<<REQUEST
            SELECT first_name, last_name, is_student_representative FROM students LEFT JOIN classes  
            ON students.class_id = classes.class_id WHERE classes.designation = '$class' 
            LIMIT 0, 30
            REQUEST;
            $objects = [];
            $i = 0;
            foreach($this->db->query($sqlReq) as $row)
            {
                $objects[] = new Student();
                $objects[$i]->firstName  = $row['first_name'];
                $objects[$i]->lastName  = $row['last_name'];
                $objects[$i]->isStudentRepresentative = $row['is_student_representative'];
                $i++;
            }
            return $objects;
    }
}
