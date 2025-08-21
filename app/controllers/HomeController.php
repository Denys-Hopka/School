<?php
require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../core/Model.php';
require_once __DIR__ . '/../models/SchoolClass.php';
require_once __DIR__ . '/../models/Student.php';

try{
class HomeController extends Controller {
    private $databaseModel;
    private $classes;
    private $students;
    private $output = [];

    public function index() {
        $this->databaseModel = $this->model('SchoolDB');

        $this->classes = $this->databaseModel->getClasses();

        foreach($this->classes as $class)
        {
            $output['classes'][] = $class->designation;
        }

        if(isset($_GET['class']) AND $_GET['class'] != 0 AND !isset($_GET['teacher']))
        {
            $this->students = $this->databaseModel->getStudentsByClass($_GET['class']);
            $i = 0;
            foreach($this->students as $student)
            {
                $output['students'][]['firstName'] = $student->firstName;
                $output['students'][]['lastName'] = $student->lastName;
                $output['students'][]['isStudentRepresentative'] = $student->isStudentRepresentative;
            }

        }
        var_dump($output);




        parent::view('home/index', $output);
    }



}
        
        


    




} catch(Exception $e)
{
    echo $e->getMessage();
}
