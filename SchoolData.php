<?php
    class SchoolData
    {
        private $conn;
        public function __construct(string $host, $db, $user, $password)
        { 
            $this->conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }



        public function print_classes()
        {
            self::print_header('Wählen Sie eine Klasse', 'class_choice_h');
            $sql_req = 'SELECT designation FROM classes';
            $this->print_table($sql_req, 1, 12, 0, 'designation');
            //   1 means that we want the table cells to contain links 
            //   12 is the maximum number of database query rows in 1 row of the html table; 
            // below in the code this parameter is called ‘html_table_width’
            //   0 means we have no th elements for this table
            //   'designation' is a field name from our database; the function can take 2 other optional parameters -- 
            // the names of the second and third fields
        }



        public function print_members($class)
        {
            $th = <<<HEADER
            </tr>
                <th class="name">Name</th>
                <th class="surname">Nachname</th>
                <th class="representative">Schüler-\n\rsprecher</th>
            <tr>
            HEADER;

            echo '<div class="members_tables">';
            for($onset = 0; $onset < 31; $onset += 10)
                {
                    // here we create 1-3 tables with student data
                    $sql_req = <<<REQUEST
                    SELECT first_name, last_name, is_student_representative FROM students LEFT JOIN classes  
                    ON students.class_id = classes.class_id WHERE classes.designation = '$class' 
                    LIMIT $onset, 10
                    REQUEST;

                    $this->print_table($sql_req, 0, 1, $th, 'first_name', 'last_name', 'is_student_representative');
                }
            echo '<div class="teachers_table">';
            self::print_header("Klassenlehrer", 'teachers_h');

            $th = <<<HEADER
            </tr>
                <th>Name</th>
                <th>Nachname</th>
            <tr>
            HEADER;

            $sql_req = <<<REQUEST
            SELECT teachers.first_name, teachers.last_name FROM classes_teachers 
            LEFT JOIN teachers ON (teachers.teacher_id = classes_teachers.teacher_id) 
            LEFT JOIN classes ON (classes.class_id = classes_teachers.class_id) WHERE classes.designation = '$class' 
            REQUEST;

            $this->print_table($sql_req, 2, 1, $th, 'first_name', 'last_name');
                echo '</div>';
            echo '</div>';

        }


        
        public function print_subjects($teacher)
        {
            echo '<div class="subjects">';
            self::print_header("Fächer, die von Herrn (Frau) $teacher unterrichtet werden:");

            $sql_req = <<<REQUEST
            SELECT subject FROM teachers_subjects 
            LEFT JOIN teachers ON (teachers.teacher_id = teachers_subjects.teacher_id) 
            LEFT JOIN subjects ON (subjects.subject_id = teachers_subjects.subject_id) WHERE teachers.last_name = '$teacher' 
            REQUEST;

            $this->print_table($sql_req, 0, 12, 0, 'subject');
            echo '</div>';
        }



        public function print_table($sql_req, $links_mode, $html_table_width, $th, $first_field, $second_field = 0, $third_field = 0)
        {
            echo '<table>';
            echo    '<tbody>';
            $row_i = 0;
            //   $row_i stores the number of printed rows from the output from the query to the database,
            // which, however, are in one row of the HTML table
            foreach($this->conn->query($sql_req) as $row)
            {

                echo $th ? $th : '';

                if($row_i == 0 AND !$th) 
                {
                    echo '<tr>';
                    //   After outputting ‘$th’, i.e. the table header, it is assigned 0. 
                    // Checking ‘!$th’ allows us to avoid printing an unnecessary empty table row directly under the table header.
                }
                $this->print_rows($row, $links_mode, $first_field, $second_field, $third_field);
                $row_i++;
                if($row_i == $html_table_width)
                {
                    echo '</tr>';
                    $row_i = 0;
                }

                if($th)
                { 
                    $th = 0;
                }
            }

            echo    '</tbody>';
            echo '</table>';
        }



        public function print_rows($row, $links_mode, $first_field, $second_field, $third_field)
        {
            if($links_mode == 0)
            {
                echo '<td>' . $row[$first_field] . '</td>';
                if($second_field)
                {
                    echo '<td>'. $row[$second_field] . '</td>';
                }
                if($third_field)
                {
                    echo '<td>'. $row[$third_field] . '</td>';
                }

            }

            if($links_mode == 1)
            {

                echo '<td>' . '<a href="?class=' . $row[$first_field] . '">' . $row[$first_field] . '</a></td>';
                if($second_field)
                {
                    echo '<td>' . '<a href="?class=' . $row[$second_field] . '">' . $row[$second_field] . '</a></td>';
                }

            }

            if($links_mode == 2)
            {

                echo '<td>' . '<a href="?class=' . $_GET['class'] . '&teacher=' . $row[$second_field] . '">' . $row[$first_field] . '</a></td>';
                if($second_field)
                {
                    echo '<td>' . '<a href="?class=' . $_GET['class'] . '&teacher=' . $row[$second_field] . '">' . $row[$second_field] . '</a></td>';
                }
            }
        }


        
        public static function print_header(string $header_text, $class = 0)
        {
            echo '<h6' . ($class ? " class=\"$class\" " : '') . '>' . $header_text . '</h6>';
        }

    }
