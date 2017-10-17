<?php
    function rgb(){
        for($i = 1; $i <= 50; ++$i){
            $r = 5 * $i;
            echo "<div style='background-color:rgb(${r},${r},${r});width:20px;height:20px'></div>". PHP_EOL;
            echo ('<br>'). PHP_EOL;
        }
        
    }
    rgb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="all" href="main.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
