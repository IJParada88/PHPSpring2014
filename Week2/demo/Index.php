<?php include 'dependency.php'; ?>
<!DOCTYPE html
<?Php 
    include 'CirlceClass.php';
    include 'SquareClass.php';
    include 'ShapeClass.php';
?>


<html>
    <head>
    
        <meta charset="UTF-8">
        <title></title>
    
    </head>
    
    <body>
        
        <?php
                
        $shape = new circle();
        echo $shape->getShape();
        
        $shape = new Square();
        echo $shape->getShape();
        
        // put your code here
        ?>
    
    </body>

</html>