<!DOCTYPE html>
<html>
<head>
    <title>Mein Framework</title>
</head>
<body>
    <h1>
    <?php 
    
    class Controller {
    public $O = 'A';
    public function getO()
    {
        $this->O = 'O';
        return $this->O;
    }
    }

    $myO = new Controller;
    $myO2 = new Controller;
    $myO3 = new Controller;
    $myO4 = new Controller;
    echo $myO->getO();
echo $myO5->O;
    
    ?></h1>
</body>
</html>