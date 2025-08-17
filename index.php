<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>


<?php
    try{
        $conn = new PDO('mysql:host=db:3306;dbname=db', "db", "db"
        // , array(PDO::ATTR_PERSISTENT => true)
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT first_name FROM students';
        foreach ($conn->query($sql) as $row) {
            echo $row['first_name'] . "\t";
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>

</form>
</body>
</html>