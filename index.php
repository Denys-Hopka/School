<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="data_tables">

        <?php
            try
            {
                require_once 'SchoolData.php';
                $host = 'db:3306';
                $db = 'db';
                $db_user = 'db';
                $db_password = 'db';
                $school_data = new SchoolData($host, $db, $db_user, $db_password);
                
                $school_data->print_classes();

                if(isset($_GET['class']) AND $_GET['class'] != 0 AND !isset($_GET['teacher']))
                {
                    $school_data->print_members($_GET['class']);
                }
                else if(isset($_GET['class']) AND $_GET['class'] != 0 AND isset($_GET['teacher']) AND $_GET['teacher'] != 0)
                {
                    $school_data->print_members($_GET['class']);
                    $school_data->print_subjects($_GET['teacher']);
                }
                else if(!isset($_GET['class']) AND !isset($_GET['teacher']))
                {

                }
                else
                {
                    throw new Exception('Error while creating tables.');
                }
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }
        ?>
        </div>
    </body>
</html>





