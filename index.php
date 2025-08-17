<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body class="school_data">
        <div class="data_tables">

        <?php
            require_once 'SchoolData.php';
            $school_data = new SchoolData();
            $school_data->print_classes();

            if(isset($_GET['class']) AND $_GET['class'] != 0)
            {
                $school_data->print_members($_GET['class']);
            }

        ?>
        </div>
    </body>
</html>





