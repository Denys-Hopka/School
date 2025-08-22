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

    public function getTeachersByClass($class)
    {
        $sqlReq = <<<REQUEST
        SELECT teachers.first_name, teachers.last_name FROM classes_teachers 
        LEFT JOIN teachers ON (teachers.teacher_id = classes_teachers.teacher_id) 
        LEFT JOIN classes ON (classes.class_id = classes_teachers.class_id) WHERE classes.designation = '$class' 
        REQUEST;
        $objects = [];
        $i = 0;
        foreach($this->db->query($sqlReq) as $row)
        {
            $objects[] = new Teacher();
            $objects[$i]->firstName  = $row['first_name'];
            $objects[$i]->lastName  = $row['last_name'];
            $i++;
        }
        return $objects;
    }

    public function getSubjectsByTeacher($teacher)
    {
        $sqlReq = <<<REQUEST
        SELECT subject FROM teachers_subjects 
        LEFT JOIN teachers ON (teachers.teacher_id = teachers_subjects.teacher_id) 
        LEFT JOIN subjects ON (subjects.subject_id = teachers_subjects.subject_id) WHERE teachers.last_name = '$teacher' 
        REQUEST;
        $objects = [];
        $i = 0;
        foreach($this->db->query($sqlReq) as $row)
        {
            $objects[] = new Subject();
            $objects[$i]->name  = $row['subject'];
            $i++;
        }
        return $objects;
    }
}
