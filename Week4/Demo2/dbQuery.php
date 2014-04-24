<?php include 'dependency.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        //print_r($_GET);
         $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
        $id = filter_input(INPUT_GET, 'id');
        
        $dbs = $db->prepare('select * from signup');
       $dbs->execute();
       $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
        
        
        
        ?>
    </body>
</html>
