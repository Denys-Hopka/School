<?php
    class SchoolData
    {
        public $conn;
        function __construct()
        { 
            $this->conn = new PDO('mysql:host=db:3306;dbname=db', "db", "db"
        // , array(PDO::ATTR_PERSISTENT => true)
        );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        function print_classes()
        {
            $this->print_header('Wählen Sie eine Klasse');
            $sql_req = 'SELECT designation FROM classes';
            $this->print_table($sql_req, 1, 'classes', 12, 0, 'designation');
            // 'designation' is a field name from our database
            // 'classes' is a table name
            // 1 means that we want the table cells to contain links 
            // 12 is the maximum number of database query rows in 1 row of the html table; below in the code this parameter is called ‘html_table_width’
            // 0 means we have no th elements for this table
        }

        function print_members($class)
        {
            $th = <<<HEADER
            </tr>
                <th>Name</th>
                <th>Nachname</th>
                <th>Schüler-\n\rsprecher</th>
            <tr>
            HEADER;

            echo '<div class="members_tables">';
                for($onset = 0; $onset < 35; $onset += 10)
                    {
                        $sql_req = <<<REQUEST
                        SELECT first_name, last_name, is_student_representative FROM students LEFT JOIN classes  
                        ON students.class_id = classes.class_id WHERE classes.designation = '$class' 
                        LIMIT $onset, 10
                        REQUEST;

                        $this->print_table($sql_req, 0, 'students', 1, $th, 'first_name', 'last_name', 'is_student_representative');
                    }
            echo '</div>';
            echo '<div class="teachers_table">';
            echo '<h1>Klassenlehrer</h1>';

            $sql_req = <<<REQUEST
            SELECT teachers.first_name, teachers.last_name FROM classes_teachers 
            LEFT JOIN teachers ON (teachers.teacher_id = classes_teachers.teacher_id) 
            LEFT JOIN classes ON classes.class_id = classes_teachers.class_id WHERE classes.designation = '$class' 
            REQUEST;

            $this->print_table($sql_req, 2, 'teachers', 1, 0, 'first_name', 'last_name');
            echo '</div>';
        }


        
        function print_table($sql_req, $links_mode, $table, $html_table_width, $th, $first_field, $second_field = 0, $third_field = 0)
        {
            echo '<table>';
            echo    '<tbody>';
            echo        '<tr>';
            $row_i = 0;
            foreach($this->conn->query($sql_req) as $row)
            {
                echo $th ? $th : '';
                if($th)
                { 
                    $th = 0;
                }
                $this->print_rows($row, $links_mode, $first_field, $second_field, $third_field);
                $row_i++;

                if($row_i == $html_table_width)
                {
                    echo '</tr>';
                    echo '<tr>';
                    $row_i = 0;
                }
            }
            echo        '</tr>';
            echo    '</tbody>';
            echo '</table>';
        }

        function print_rows($row, $links_mode, $first_field, $second_field, $third_field)
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
                if($third_field)
                {
                    echo '<td>' . '<a href="?class=' . $row[$third_field] . '">' . $row[$third_field] . '</a></td>';
                }

            }

            if($links_mode == 2)
            {

                echo '<td>' . '<a href="?class=' . $row[$first_field] . '">' . $row[$first_field] . '</a></td>';
                if($second_field)
                {
                    echo '<td>' . '<a href="?class=' . $row[$second_field] . '">' . $row[$second_field] . '</a></td>';
                }
                if($third_field)
                {
                    echo '<td>' . '<a href="?class=' . $row[$third_field] . '">' . $row[$third_field] . '</a></td>';
                }

            }

        }






        function print_header(string $header_text)
        {
            echo '<h1>' . $header_text . '</h1>';
        }

    }
    // try{

    //     $sql = 'SELECT first_name FROM students';
    //     foreach ($conn->query($sql) as $row) {
    //         echo $row['first_name'] . "\t";
    //     }
    // }catch(Exception $e){
    //     echo $e->getMessage();
    // }

