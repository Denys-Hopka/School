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
            $sql_req = 'SELECT designation FROM classes';
            $this->print_table($sql_req, 1, 'classes', 12, 'designation');
            // 'designation' is a field name from our database
            // 'classes' is a table name
            // 1 means that we want the table cells to contain links 
            // 12 is the maximum number of cells in 1 row of the table
        }

        function print_members($class)
        {

        }


        
        function print_table($sql_req, $links_mode, $table, $cols, $first_field, $second_field = 0, $third_field = 0)
        {


            



            $this->print_header('Wählen Sie eine Klasse');
            echo '<table>';
            echo    '<tbody>';
            echo        '<tr>';

            $i = 0;

            foreach ($this->conn->query($sql_req) as $row)
            {
                if($i == $cols)
                {
                    echo '</tr>';
                    echo '<tr>';
                }

                $this->print_rows($row, $links_mode, $first_field, $second_field = 0, $third_field = 0);

                $i++;
            }
            echo        '</tr>';
            echo    '<tbody>';
            echo '<table>';
        }

        function print_rows($row, $links_mode, $first_field, $second_field = 0, $third_field = 0)
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
                if($third_field == 1)
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
                if($third_field == 1)
                {
                    echo '<td>' . '<a href="?class=' . $row[$third_field] . '">' . $row[$third_field] . '</a></td>';
                }
            }

        }






        function print_header(string $header_text)
        {
            echo '<h1>' . $header_text . '<h1>';
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

