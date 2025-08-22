<?php
require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../core/Model.php';
require_once __DIR__ . '/../models/SchoolClass.php';
require_once __DIR__ . '/../models/Student.php';
require_once __DIR__ . '/../models/Teacher.php';
require_once __DIR__ . '/../models/Subject.php';

try{
class HomeController extends Controller {
    private $databaseModel;
    private $classes;
    private $students;
    private $teachers;
    private $subjects;
    private $output = [];

    public function index() {
        $this->databaseModel = $this->model('SchoolDB');

        $this->printClasses();
        $this->printStudents();
        $this->printTeachers();
        $this->printSubjects();
        parent::view('home/index', $this->output);
    }


    public function printClasses()
    {
        $this->classes = $this->databaseModel->getClasses();
        foreach($this->classes as $class)
        {
            $this->output['classes'][] = $class->designation;
        }
    }


    public function printTeachers()
    {
        if(isset($_GET['class']))
        {
            $this->teachers = $this->databaseModel->getTeachersByClass($_GET['class']);
            $i = 0;
            foreach($this->teachers as $teacher)
            {
                $this->output['teachers'][$i]['lastName'] = $teacher->lastName;
                $this->output['teachers'][$i]['firstName'] = $teacher->firstName;
                $i++;
            }
        }
        else
        {   
            $_GET['class'] = '1A';
            for($i = 0; $i < 2; $i++)
            {

                $this->output['teachers'][$i]['lastName'] = "&#8291;";
                $this->output['teachers'][$i]['firstName'] = "&#8291;";

            }
        }
    }



    public function printStudents()
    {
        if(isset($_GET['class']))
        {
        $this->students = $this->databaseModel->getStudentsByClass($_GET['class']);
            $i = 0;
            foreach($this->students as $student)
            {
                $this->output['students'][$i]['firstName'] = $student->firstName;
                $this->output['students'][$i]['lastName'] = $student->lastName;
                $this->output['students'][$i]['isStudentRepresentative'] = $student->isStudentRepresentative;
                $i++;
            }
        }
        else
        {
            $this->output['students'] = [];
        }
        for($i = count($this->output['students']); $i < 30; $i++)
        {
            $this->output['students'][$i]['firstName'] = '&#8291;';
            $this->output['students'][$i]['lastName'] = '&#8291;';
            $this->output['students'][$i]['isStudentRepresentative'] = '&#8291;';
            
        }
    }



    public function printSubjects()
    {
        if(isset($_GET['teacher']))
        {
        $this->subjects = $this->databaseModel->getSubjectsByTeacher($_GET['teacher']);
            $i = 0;
            foreach($this->subjects as $subject)
            {
                $this->output['subjects'][$i] = $subject->name;
                $i++;
            }
        }
        else
        {
            $_GET['teacher'] = '&emsp;';
            $this->output['subjects'] = [];
        }
        for($i = count($this->output['subjects']); $i < 6; $i++)
        {
            $this->output['subjects'][$i] = '&emsp;&emsp;';
            
        }
    }



}



}
 catch(Exception $e)
{
    echo $e->getMessage();
}
